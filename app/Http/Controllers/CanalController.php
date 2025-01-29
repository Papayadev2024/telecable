<?php

namespace App\Http\Controllers;

use App\Models\Canal;
use App\Http\Requests\StoreCanalRequest;
use App\Http\Requests\UpdateCanalRequest;
use Illuminate\Http\Request;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;

class CanalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $canales = Canal::where("status", "=", true)->get();
       
        return view('pages.canal.index', compact('canales'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.canal.create');
    }

    

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $canal = new Canal(); 
       
       
        if ($request->hasFile("imagen")) {
            $file = $request->file('imagen');
            $routeImg = 'storage/images/canal/';
            $nombreImagen = Str::random(10) . '_' . $file->getClientOriginalName();

            $this->saveImg($file, $routeImg, $nombreImagen);
           
            $canal->imagen = $routeImg . $nombreImagen;
        }

        $canal->name = $request->name;
        $canal->description = $request->description;
        $canal->type = $request->type;
        $canal->color = $request->color;

        $canal->save();
       
        return redirect()->route('canales.index')->with('success', 'Canal creado');
    }

    /**
     * Display the specified resource.
     */
    public function show(Canal $canal)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request, $idcanal)
    {   
        
         $canales = Canal::where('id', $idcanal)->first();
        
         return view('pages.canal.edit', compact('canales'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $canal = Canal::where('id', $id)->first();
        
        if ($request->hasFile("imagen")) {
            $file = $request->file('imagen');
            $routeImg = 'storage/images/canal/';
            $nombreImagen = Str::random(10) . '_' . $file->getClientOriginalName();
           
            $this->saveImg($file, $routeImg, $nombreImagen);
           
            $canal->imagen = $routeImg . $nombreImagen;
        }

        $canal->name = $request->name;
        $canal->description = $request->description;
        $canal->type = $request->type;
        $canal->color = $request->color;

        $canal->save();

        return redirect()->route('canales.index')->with('success', 'Canal modificado');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function deleteCanal(Request $request)
    {
        $id = $request->id;
       
        $category = Canal::findOrfail($id); 
       
        $category->delete();
       
        return response()->json(['message' => 'Canal eliminado']);
    }


    public function destroy(Canal $canal)
    {
        //
    }

    public function updateVisible(Request $request)
    {
        // Lógica para manejar la solicitud AJAX
       
        $id = $request->id;

        $field = $request->field;
        
        $status = $request->status;

        $category = Canal::findOrFail($id);
        
        $category->$field = $status;

        $category->save();

         return response()->json(['message' => 'Canal modificado']);
    
    }

    public function saveImg($file, $route, $nombreImagen){
		
        $manager = new ImageManager(new Driver());
		$img =  $manager->read($file);

		if (!file_exists($route)) {
			mkdir($route, 0777, true); // Se crea la ruta con permisos de lectura, escritura y ejecución
	    }

		$img->save($route . $nombreImagen);
	}
}
