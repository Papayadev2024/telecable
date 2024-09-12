<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;
use App\Models\Microcategory;
use App\Models\Products;
use App\Models\Subcategory;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Intervention\Image\Drivers\Gd\Driver;
use Intervention\Image\ImageManager;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $category = Category::where('status', '=', true)->orderBy('order', 'asc')->get();

        return view('pages.categories.index', compact('category'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.categories.create');
    }

    public function saveImg($file, $route, $nombreImagen)
    {
        $manager = new ImageManager(new Driver());
        $img = $manager->read($file);
        // $img->coverDown(672, 700, 'center');
        if (!file_exists($route)) {
            mkdir($route, 0777, true); // Se crea la ruta con permisos de lectura, escritura y ejecución
        }
        $img->save($route . $nombreImagen);
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $category = new Category();

        if ($request->hasFile('imagen')) {
            $file = $request->file('imagen');
            $routeImg = 'storage/images/categories/';
            $nombreImagen = Str::random(10) . '_' . $file->getClientOriginalName();

            $this->saveImg($file, $routeImg, $nombreImagen);

            $category->url_image = $routeImg;
            $category->name_image = $nombreImagen;
        } else {
            $routeImg = 'images/img/';
            $nombreImagen = 'noimagenslider.jpg';

            $category->url_image = $routeImg;
            $category->name_image = $nombreImagen;
        }

        $slug = strtolower(str_replace(' ', '-', $request->name));

        if (Category::where('slug', $slug)->exists()) {
            $slug .= '-' . rand(1, 1000);
        }

        $maxOrder = Category::max('order');
        $category->order = $maxOrder !== null ? $maxOrder + 1 : 1;

        $category->name = $request->name;
        $category->description = $request->description;
        // $category->extract = $request->extract;
        $category->slug = $slug;
        $category->status = 1;
        $category->visible = 1;
        $category->save();

        return redirect()->route('categorias.index')->with('success', 'Categoria creada');
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category, $id)
    {
        $category = Category::findOrfail($id);

        return view('pages.categories.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $category = Category::findOrfail($id);

        if ($request->hasFile('imagen')) {
            $file = $request->file('imagen');
            $routeImg = 'storage/images/categories/';
            $nombreImagen = Str::random(10) . '_' . $file->getClientOriginalName();

            if ($category->url_image !== 'images/img/') {
                File::delete($category->url_image . $category->name_image);
            }

            $this->saveImg($file, $routeImg, $nombreImagen);

            $category->url_image = $routeImg;
            $category->name_image = $nombreImagen;
        }

        $slug = strtolower(str_replace(' ', '-', $request->name));

        if (Category::where('slug', $slug)->exists()) {
            $slug .= '-' . rand(1, 1000);
        }

        $category->name = $request->name;
        $category->description = $request->description;
        $category->extract = $request->extract;
        $category->slug = $slug;
        $category->save();

        return redirect()->route('categorias.index')->with('success', 'Categoria modificada');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        //
    }

    public function deleteCategory(Request $request)
    {
        $id = $request->id;

        $category = Category::findOrfail($id);

        $category->status = false;

        $category->save();

        return response()->json(['message' => 'Categoría eliminada']);
    }

    public function updateVisible(Request $request)
    {
        $id = $request->id;

        $field = $request->field;

        $status = $request->status;

        $cantidad = $this->contarCategoriasDestacadas();

        if ($field == 'destacar') {
            if ($cantidad >= 1000 && $request->status == 1) {
                return response()->json(['message' => 'Solo puedes destacar 1000 categorias'], 409);
            }
        }

        $category = Category::findOrFail($id);

        $category->$field = $status;

        $category->save();

        $cantidad = $this->contarCategoriasDestacadas();

        return response()->json(['message' => 'Categoría modificada', 'cantidad' => $cantidad]);
    }

    public function contarCategoriasDestacadas()
    {
        $cantidad = Category::where('destacar', '=', 1)->count();

        return $cantidad;
    }

    public function getSubcategoria(Request $request){
            $page = 0;
            $subcategorias = Subcategory::where('category_id', '=', $request->id)->get();
            $productos = DB::table('products')
            ->join('categories', 'products.categoria_id', '=', 'categories.id')
            ->orderByRaw('CASE WHEN products.order IS NULL THEN 1 ELSE 0 END')
            ->orderBy('products.order', 'asc')
            ->where('products.status', '=', 1)
            ->where('products.visible', '=', 1)
            ->where('products.categoria_id', '=', $request->id)
            ->orderBy('products.order', 'asc')
            ->orderBy('products.id', 'asc')
            ->select('products.*', 'categories.name as category_name')
            ->orderByRaw('CASE WHEN products.destacar = 1 THEN 0 ELSE 1 END, products.id DESC')
            ->paginate(9);

            
            // if (!empty($productos->nextPageUrl())) {
            //     $parse_url = parse_url($productos->nextPageUrl());

            //     if (!empty($parse_url['query'])) {
            //         parse_str($parse_url['query'], $get_array);
            //         $page = !empty($get_array['page']) ? $get_array['page'] : 0;
            //     }
            // }
            $nextPage = $productos->hasMorePages() ? $productos->currentPage() + 1 : 0;
    
            $categorias = Category::where('status', '=', 1)->where('visible', '=', 1)->where('id', '=', $request->id)->get(['id', 'name', 'extract', 'description']);
           
            return response()->json(['message' => 'Subcategorias', 'subcategorias' => $subcategorias, 'productos' => $productos, 'categorias' => $categorias, 'page' => $nextPage]);
    }


    public function getMicrocategoria(Request $request){
            $page = 0;
            $microcategorias = Microcategory::where('subcategory_id', '=', $request->id)->get();
            $productos = DB::table('products')
            ->join('categories', 'products.categoria_id', '=', 'categories.id')
            ->where('products.status', '=', 1)
            ->where('products.visible', '=', 1)
            ->where('products.subcategoria_id', '=', $request->id)
            ->orderByRaw('CASE WHEN products.order IS NULL THEN 1 ELSE 0 END')
            ->orderBy('products.order', 'asc')
            ->orderBy('products.id', 'asc')
            ->select('products.*', 'categories.name as category_name')
            ->orderByRaw('CASE WHEN products.destacar = 1 THEN 0 ELSE 1 END, products.id DESC')
            ->paginate(9);

            $nextPage = $productos->hasMorePages() ? $productos->currentPage() + 1 : 0;

            return response()->json(['message' => 'Microcategoria', 'microcategorias' => $microcategorias,'productos' => $productos, 'page' => $nextPage]);
    }

    public function getProductMicrocategoria(Request $request){
            
        $productos = DB::table('products')
        ->join('categories', 'products.categoria_id', '=', 'categories.id')
        ->where('products.status', '=', 1)
        ->where('products.visible', '=', 1)
        ->where('products.microcategoria_id', '=', $request->id)
        ->orderByRaw('CASE WHEN products.order IS NULL THEN 1 ELSE 0 END')
        ->orderBy('products.order', 'asc')
        ->orderBy('products.id', 'asc')
        ->select('products.*', 'categories.name as category_name')
        ->orderByRaw('CASE WHEN products.destacar = 1 THEN 0 ELSE 1 END, products.id DESC')
        ->paginate(9);

        $nextPage = $productos->hasMorePages() ? $productos->currentPage() + 1 : 0;

            return response()->json(['message' => 'Microcategoria', 'productos' => $productos, 'page' => $nextPage]);
    }


    public function getTotalProductos(Request $request){

        $id = $request->id;
        $page = 0;

        $productos = DB::table('products')
        ->join('categories', 'products.categoria_id', '=', 'categories.id')
        ->where('products.status', '=', 1)
        ->where('products.visible', '=', 1)
        ->where(function ($query) use ($id) {
            $query->where('products.categoria_id', '=', $id)
                  ->orWhere('products.subcategoria_id', '=', $id)
                  ->orWhere('products.microcategoria_id', '=', $id);
        })
        ->orderByRaw('CASE WHEN products.order IS NULL THEN 1 ELSE 0 END')
        ->orderBy('products.order', 'asc')
        ->orderBy('products.id', 'asc')
        ->select('products.*', 'categories.name as category_name')
        ->orderByRaw('CASE WHEN products.destacar = 1 THEN 0 ELSE 1 END, products.id DESC')
        ->paginate(9);

        // if (!empty($productos->nextPageUrl())) {
        //     $parse_url = parse_url($productos->nextPageUrl());

        //     if (!empty($parse_url['query'])) {
        //         parse_str($parse_url['query'], $get_array);
        //         $page = !empty($get_array['page']) ? $get_array['page'] : 0;
                
        //     }
        // }

        $nextPage = $productos->hasMorePages() ? $productos->currentPage() + 1 : 0;
        // $productos = Products::where('categoria_id', $id)
        // ->orWhere('subcategoria_id', $id)
        // ->orWhere('microcategoria_id', $id)
        // ->paginate(3);

        // dd($productos->currentPage());
        // dd($nextPage);
        // dd($productos->hasMorePages());

        return response()->json(['message' => 'productosPaginados', 'productos' => $productos, 'page' => $nextPage]);
    }

}
