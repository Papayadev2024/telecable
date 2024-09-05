<?php

namespace App\Http\Controllers;

use App\Models\Staff;
use Illuminate\Http\Request;
use Intervention\Image\Drivers\Gd\Driver;
use Intervention\Image\ImageManager;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;

class StaffController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $staff = Staff::where('status', '=', true)->get();
        return view('pages.staff.index', compact('staff') );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.staff.create');
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {   
        $staff = new Staff();

        if ($request->hasFile("imagen")) {
            $file = $request->file('imagen');
            $routeImg = 'storage/images/staff/';
            $nombreImagen = Str::random(10) . '_' . $file->getClientOriginalName();
            $this->saveImg($file, $routeImg, $nombreImagen);

            $staff ->url_image = $routeImg;
            $staff ->name_image = $nombreImagen;
        }else{
            $routeImg = 'images/img/';
            $nombreImagen = 'noimagenliquidacion.jpg';

            $staff ->url_image = $routeImg;
            $staff ->name_image = $nombreImagen;
        }

            $staff ->nombre = $request->nombre;
            $staff ->cargo = $request->cargo;
            $staff ->facebook = $request->facebook;
            $staff ->instagram = $request->instagram;
            $staff ->youtube = $request->youtube;
            $staff ->twitter = $request->twitter;
            $staff ->save();


        return redirect()->route('staff.index')->with('success', 'Personal creado exitosamente.');

        
        
    }


    public function saveImg($file, $route, $nombreImagen){
		$manager = new ImageManager(new Driver());
		$img =  $manager->read($file);        
        $img->coverDown(406, 535, 'center'); 
		if (!file_exists($route)) {
			mkdir($route, 0777, true); // Se crea la ruta con permisos de lectura, escritura y ejecución
	}
		$img->save($route . $nombreImagen);
	}

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $staff = Staff::find($id);

        return view('pages.staff.edit', compact('staff'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $staff = Staff::findOrfail($id);

        if ($request->hasFile("imagen")) {
            $file = $request->file('imagen');
            $routeImg = 'storage/images/liquidacion/';
            $nombreImagen = Str::random(10) . '_' . $file->getClientOriginalName();

            if ($staff->url_image !== 'images/img/') {
                File::delete($staff->url_image . $staff->name_image);
            }
              
            $this->saveImg($file, $routeImg, $nombreImagen);
            $staff->url_image = $routeImg;
            $staff->name_image = $nombreImagen;
        }

         
            
            $staff ->nombre = $request->nombre;
            $staff ->cargo = $request->cargo;
            $staff ->facebook = $request->facebook;
            $staff ->instagram = $request->instagram;
            $staff ->youtube = $request->youtube;
            $staff ->twitter = $request->twitter;
            $staff->update();

        return redirect()->route('staff.index')->with('success', 'Personal Actualizado exitosamente.');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function updateVisible(Request $request){
        $id = $request->id; 
        $stauts = $request->status; 
        $staff = Staff::find($id);
        $staff->status = $stauts; 

        $staff->save();
        return response()->json(['message'=> 'registro actualizado']);
    }


    public function deleteStaff(Request $request)
    {
        //Recupero el id mandado mediante ajax
        $id = $request->id;
        //Busco el servicio con id como parametro
        $service = Staff::findOrfail($id);
        //Modifico el status a false
        $service->status = false;
        //Guardo
        $service->save();

        // Devuelvo una respuesta JSON u otra respuesta según necesites
        return response()->json(['message' => 'Personal eliminado.']);
    }
}
