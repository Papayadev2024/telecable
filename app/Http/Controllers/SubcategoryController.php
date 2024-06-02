<?php

namespace App\Http\Controllers;

use App\Models\Subcategory;
use App\Http\Requests\StoreSubcategoryRequest;
use App\Http\Requests\UpdateSubcategoryRequest;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Intervention\Image\Drivers\Gd\Driver;
use Intervention\Image\ImageManager;
use Illuminate\Support\Str;


class SubcategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $subcategory = Subcategory::where('status', '=', true)->get();

        return view('pages.subcategories.index', compact('subcategory'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {   
        $categoria = Category::where('status', '=', true)->where('visible', '=', true)->get();
        return view('pages.subcategories.create', compact('categoria'));
    }

    /**
     * Store a newly created resource in storage.
     */

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

    
    public function store(Request $request)
    {
        $subcategory = new Subcategory();

        if ($request->hasFile('imagen')) {
            $file = $request->file('imagen');
            $routeImg = 'storage/images/subcategories/';
            $nombreImagen = Str::random(10) . '_' . $file->getClientOriginalName();

            $this->saveImg($file, $routeImg, $nombreImagen);

            $subcategory->url_image = $routeImg;
            $subcategory->name_image = $nombreImagen;
        } else {
            $routeImg = 'images/img/';
            $nombreImagen = 'noimagenslider.jpg';

            $subcategory->url_image = $routeImg;
            $subcategory->name_image = $nombreImagen;
        }

        $slug = strtolower(str_replace(' ', '-', $request->name));

        if (Subcategory::where('slug', $slug)->exists()) {
            $slug .= '-' . rand(1, 1000);
        }

        $subcategory->name = $request->name;
        $subcategory->category_id = $request->category_id;
        $subcategory->description = $request->description;
        $subcategory->slug = $slug;
        $subcategory->status = 1;
        $subcategory->visible = 1;
        $subcategory->save();

        return redirect()->route('subcategorias.index')->with('success', 'Subcategoria creada');
    }

    /**
     * Display the specified resource.
     */
    public function show(Subcategory $subcategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Subcategory $subcategory, $id)
    {
        $subcategory = Subcategory::findOrfail($id);
        $categories = Category::where('status', '=', true)->where('visible', '=', true)->get();
        return view('pages.subcategories.edit', compact('subcategory', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $subcategory = Subcategory::findOrfail($id);

        if ($request->hasFile('imagen')) {
            $file = $request->file('imagen');
            $routeImg = 'storage/images/subcategories/';
            $nombreImagen = Str::random(10) . '_' . $file->getClientOriginalName();

            if ($subcategory->url_image !== 'images/img/') {
                File::delete($subcategory->url_image . $subcategory->name_image);
            }

            $this->saveImg($file, $routeImg, $nombreImagen);

            $subcategory->url_image = $routeImg;
            $subcategory->name_image = $nombreImagen;
        }

        $slug = strtolower(str_replace(' ', '-', $request->name));

        if (Subcategory::where('slug', $slug)->exists()) {
            $slug .= '-' . rand(1, 1000);
        }

        $subcategory->category_id = $request->category_id;
        $subcategory->name = $request->name;
        $subcategory->description = $request->description;
        $subcategory->slug = $slug;
        $subcategory->save();

        return redirect()->route('subcategorias.index')->with('success', 'Categoria modificada');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Subcategory $subcategory)
    {
        //
    }

    public function deleteSubCategory(Request $request)
    {
        $id = $request->id;

        $subcategory = Subcategory::findOrfail($id);

        $subcategory->status = false;

        $subcategory->save();

        return response()->json(['message' => 'Subcategoría eliminada']);
    }

    public function updateVisible(Request $request)
    {
        $id = $request->id;

        $field = $request->field;

        $status = $request->status;

        $cantidad = $this->contarSubCategoriasDestacadas();

        if ($field == 'destacar') {
            if ($cantidad >= 1000 && $request->status == 1) {
                return response()->json(['message' => 'Solo puedes destacar 1000 categorias'], 409);
            }
        }

        $category = Subcategory::findOrFail($id);

        $category->$field = $status;

        $category->save();

        $cantidad = $this->contarSubCategoriasDestacadas();

        return response()->json(['message' => 'Categoría modificada', 'cantidad' => $cantidad]);
    }

    public function contarSubCategoriasDestacadas()
    {
        $cantidad = Subcategory::where('destacar', '=', 1)->count();

        return $cantidad;
    }
}
