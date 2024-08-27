<?php

namespace App\Http\Controllers;

use App\Models\Descargables;
use App\Http\Requests\StoreDescargablesRequest;
use App\Http\Requests\UpdateDescargablesRequest;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
use Intervention\Image\Drivers\Gd\Driver;
use Intervention\Image\ImageManager;

class DescargablesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $descargables = Descargables::where('status', '=', true)->get();

        return view('pages.downloader.index', compact('descargables'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categoria = Category::where('status', '=', true)->where('visible', '=', true)->get();
        return view('pages.downloader.create', compact('categoria'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
        ]);

        $descargables = new Descargables();

        try {
            if ($request->hasFile('imagen')) {
                $file = $request->file('imagen');
                $routeImg = 'storage/images/descargables/';
                $nombreImagen = Str::random(10) . '_' . $file->getClientOriginalName();
                $this->saveImg($file, $routeImg, $nombreImagen);

                $descargables->url_image = $routeImg;
                $descargables->name_image = $nombreImagen;
            } else {
                $routeImg = 'images/img/';
                $nombreImagen = 'noimagenliquidacion.jpg';

                $descargables->url_image = $routeImg;
                $descargables->name_image = $nombreImagen;
            }

            if ($request->hasFile('archive')) {
                $file = $request->file('archive');
                $routeImg = 'storage/archives/';
                $nombreImagen = Str::random(10) . '_' . $file->getClientOriginalName();

                if (!file_exists($routeImg)) {
                    mkdir($routeImg, 0777, true);
                }

                $file->move($routeImg, $nombreImagen);

                $descargables->url_archive = $routeImg;
                $descargables->name_archive = $nombreImagen;
            }

            $descargables->title = $request->title;
            $descargables->categoria_id = $request->categoria_id;
            $descargables->description = $request->description;
            $descargables->save();

            return redirect()->route('descargables.index')->with('success', 'Catalogo creado exitosamente.');
        } catch (\Throwable $th) {
            return response()->json(['messge' => 'Verifique sus datos'], 400);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Descargables $descargables)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Descargables $descargables, $id)
    {
        $descargables = Descargables::findOrfail($id);
        $categoria = Category::where('status', '=', true)->where('visible', '=', true)->get();
        return view('pages.downloader.edit', compact('descargables', 'categoria'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $descargables = Descargables::findOrfail($id);

        try {
            if ($request->hasFile('imagen')) {
                $file = $request->file('imagen');
                $routeImg = 'storage/images/descargables/';
                $nombreImagen = Str::random(10) . '_' . $file->getClientOriginalName();

                if ($descargables->url_image !== 'images/img/') {
                    File::delete($descargables->url_image . $descargables->name_image);
                }

                $this->saveImg($file, $routeImg, $nombreImagen);

                $descargables->url_image = $routeImg;

                $descargables->name_image = $nombreImagen;
            }

            if ($request->hasFile('archive')) {
                $file = $request->file('archive');
                $routeImg = 'storage/archives/';
                $nombreImagen = Str::random(10) . '_' . $file->getClientOriginalName();

                if (!file_exists($routeImg)) {
                    mkdir($routeImg, 0777, true);
                }

                $file->move($routeImg, $nombreImagen);

                $descargables->url_archive = $routeImg;
                $descargables->name_archive = $nombreImagen;
            }

            $descargables->title = $request->title;
            $descargables->categoria_id = $request->categoria_id;
            $descargables->description = $request->description;
            $descargables->update();

            return redirect()->route('descargables.index')->with('success', 'Catalogo modificado exitosamente.');
        } catch (\Throwable $th) {
            return response()->json(['messge' => 'Verifique sus datos '], 400);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Descargables $descargables)
    {
        //
    }

    public function saveImg($file, $route, $nombreImagen)
    {
        $manager = new ImageManager(new Driver());
        $img = $manager->read($file);
        $img->coverDown(155, 208, 'center');
        if (!file_exists($route)) {
            mkdir($route, 0777, true); // Se crea la ruta con permisos de lectura, escritura y ejecución
        }
        $img->save($route . $nombreImagen);
    }

    public function deleteDownload(Request $request)
    {
        //Recupero el id mandado mediante ajax
        $id = $request->id;

        //Busco el servicio con id como parametro
        $service = Descargables::findOrfail($id);
        //Modifico el status a false
        $service->status = false;
        //Guardo
        $service->save();

        // Devuelvo una respuesta JSON u otra respuesta según necesites
        return response()->json(['message' => 'Catalogo eliminado.']);
    }

    public function updateVisible(Request $request)
    {
        $cantidad = $this->contarLiquidacionVisible();

        if ($cantidad >= 1000 && $request->status == 1) {
            return response()->json(['message' => 'Solo puedes hacer visible 1000 banner de liquidacion'], 409);
        }

        $id = $request->id;
        $field = $request->field;
        $status = $request->status;
        $service = Descargables::findOrFail($id);
        $service->$field = $status;
        $service->save();

        $cantidad = $this->contarLiquidacionVisible();

        return response()->json(['message' => 'Catalogo modificado', 'cantidad' => $cantidad]);
    }

    public function contarLiquidacionVisible()
    {
        $cantidad = Descargables::where('visible', '=', 1)->count();
        return $cantidad;
    }
}
