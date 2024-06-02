<?php

namespace App\Http\Controllers;

use App\Models\Microcategory;
use App\Http\Requests\StoreMicrocategoryRequest;
use App\Http\Requests\UpdateMicrocategoryRequest;
use App\Models\Subcategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Intervention\Image\Drivers\Gd\Driver;
use Intervention\Image\ImageManager;
use Illuminate\Support\Str;


class MicrocategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $microcategory = Microcategory::where('status', '=', true)->get();

        return view('pages.microcategories.index', compact('microcategory'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $subcategoria = Subcategory::where('status', '=', true)->where('visible', '=', true)->get();
        return view('pages.microcategories.create', compact('subcategoria'));
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


    public function store(Request  $request)
    {
        $microcategory = new Microcategory();

        if ($request->hasFile('imagen')) {
            $file = $request->file('imagen');
            $routeImg = 'storage/images/microcategories/';
            $nombreImagen = Str::random(10) . '_' . $file->getClientOriginalName();

            $this->saveImg($file, $routeImg, $nombreImagen);

            $microcategory->url_image = $routeImg;
            $microcategory->name_image = $nombreImagen;
        } else {
            $routeImg = 'images/img/';
            $nombreImagen = 'noimagenslider.jpg';

            $microcategory->url_image = $routeImg;
            $microcategory->name_image = $nombreImagen;
        }

        $slug = strtolower(str_replace(' ', '-', $request->name));

        if (Microcategory::where('slug', $slug)->exists()) {
            $slug .= '-' . rand(1, 1000);
        }

        $microcategory->name = $request->name;
        $microcategory->subcategory_id = $request->subcategory_id;
        $microcategory->description = $request->description;
        $microcategory->slug = $slug;
        $microcategory->status = 1;
        $microcategory->visible = 1;
        $microcategory->save();

        return redirect()->route('microcategorias.index')->with('success', 'Microcategoria creada');
    }

    /**
     * Display the specified resource.
     */
    public function show(Microcategory $microcategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Microcategory $microcategory, $id)
    {
        $microcategory = Microcategory::findOrfail($id);
        $subcategories = Subcategory::where('status', '=', true)->where('visible', '=', true)->get();
        return view('pages.microcategories.edit', compact('subcategories', 'microcategory'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $microcategory = Microcategory::findOrfail($id);

        if ($request->hasFile('imagen')) {
            $file = $request->file('imagen');
            $routeImg = 'storage/images/microcategories/';
            $nombreImagen = Str::random(10) . '_' . $file->getClientOriginalName();

            if ($microcategory->url_image !== 'images/img/') {
                File::delete($microcategory->url_image . $microcategory->name_image);
            }

            $this->saveImg($file, $routeImg, $nombreImagen);

            $microcategory->url_image = $routeImg;
            $microcategory->name_image = $nombreImagen;
        }

        $slug = strtolower(str_replace(' ', '-', $request->name));

        if (Subcategory::where('slug', $slug)->exists()) {
            $slug .= '-' . rand(1, 1000);
        }

        $microcategory->subcategory_id = $request->subcategory_id;
        $microcategory->name = $request->name;
        $microcategory->description = $request->description;
        $microcategory->slug = $slug;
        $microcategory->save();

        return redirect()->route('microcategorias.index')->with('success', 'Microcategoria modificada');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Microcategory $microcategory)
    {
        //
    }


    public function deleteMicrocategory(Request $request)
    {
        $id = $request->id;

        $subcategory = Microcategory::findOrfail($id);

        $subcategory->status = false;

        $subcategory->save();

        return response()->json(['message' => 'Microcategoria eliminada']);
    }

    public function updateVisible(Request $request)
    {
        $id = $request->id;

        $field = $request->field;

        $status = $request->status;

        $cantidad = $this->contarMicroCategoriasDestacadas();

        if ($field == 'destacar') {
            if ($cantidad >= 1000 && $request->status == 1) {
                return response()->json(['message' => 'Solo puedes destacar 1000 microcategorias'], 409);
            }
        }

        $category = Microcategory::findOrFail($id);

        $category->$field = $status;

        $category->save();

        $cantidad = $this->contarMicroCategoriasDestacadas();

        return response()->json(['message' => 'Microcategoria modificada', 'cantidad' => $cantidad]);
    }

    public function contarMicroCategoriasDestacadas()
    {
        $cantidad = Microcategory::where('destacar', '=', 1)->count();

        return $cantidad;
    }
}
