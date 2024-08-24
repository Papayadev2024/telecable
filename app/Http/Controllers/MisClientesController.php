<?php

namespace App\Http\Controllers;

use App\Models\MisClientes;
use App\Http\Requests\StoreMisClientesRequest;
use App\Http\Requests\UpdateMisClientesRequest;
use Illuminate\Http\Request;
use Intervention\Image\Drivers\Gd\Driver;
use Intervention\Image\ImageManager;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;

class MisClientesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $misclientes = MisClientes::where("status", "=", true)->get();

        return view('pages.misclientes.index', compact('misclientes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.misclientes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
        ]);
        $misclientes = new MisClientes();
       
        try {
			
			if ($request->hasFile("imagen")) {
				$file = $request->file('imagen');
				$routeImg = 'storage/images/misclientes/';
				$nombreImagen = Str::random(10) . '_' . $file->getClientOriginalName();
				$this->saveImg($file, $routeImg, $nombreImagen);

                $misclientes ->url_image = $routeImg;
                $misclientes ->name_image = $nombreImagen;
			}else{
                $routeImg = 'images/img/';
                $nombreImagen = 'noimagenliquidacion.jpg';

                $misclientes ->url_image = $routeImg;
                $misclientes ->name_image = $nombreImagen;
            }

            $misclientes ->botontext1 = $request->botontext1;
            $misclientes ->link1 = '/misclientes';
            $misclientes ->title = $request->title;
            $misclientes ->description = $request->description;
            $misclientes ->save();
    
            return redirect()->route('misclientes.index')->with('success', 'Cliente creado exitosamente.');


		} catch (\Throwable $th) {
			return response()->json(['messge' => 'Verifique sus datos'], 400); 
		}
    }

    /**
     * Display the specified resource.
     */
    public function show(MisClientes $misClientes)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $misclientes = MisClientes::find($id);

        return view('pages.misclientes.edit', compact('misclientes'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $misclientes = MisClientes::findOrfail($id);
      
        try {
			
			if ($request->hasFile("imagen")) {
				$file = $request->file('imagen');
				$routeImg = 'storage/images/misclientes/';
				$nombreImagen = Str::random(10) . '_' . $file->getClientOriginalName();

                if ($misclientes->url_image !== 'images/img/') {
                    File::delete($misclientes->url_image . $misclientes->name_image);
                }
                  
                $this->saveImg($file, $routeImg, $nombreImagen);
	
                $misclientes->url_image = $routeImg;
                $misclientes->name_image = $nombreImagen;

			}

            $misclientes->title = $request->title;
            $misclientes->description = $request->description;
            $misclientes ->botontext1 = $request->botontext1;
            $misclientes ->link1 = $request->link1;
            $misclientes->update();

			return redirect()->route('misclientes.index')->with('success', 'Cliente modificado exitosamente.');


		} catch (\Throwable $th) {
			return response()->json(['messge' => 'Verifique sus datos '], 400); 
		}
    }

    public function saveImg($file, $route, $nombreImagen){
		$manager = new ImageManager(new Driver());
		$img =  $manager->read($file);        
        // $img->coverDown(198, 72, 'center'); 
		if (!file_exists($route)) {
			mkdir($route, 0777, true); // Se crea la ruta con permisos de lectura, escritura y ejecución
	}
		$img->save($route . $nombreImagen);
	}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(MisClientes $misClientes)
    {
        //
    }

    public function deleteMisClientes(Request $request)
    {
        //Recupero el id mandado mediante ajax
        $id = $request->id;
        
        //Busco el servicio con id como parametro
        $service = MisClientes::findOrfail($id);
        //Modifico el status a false
        $service->status = false;
        //Guardo 
        $service->save();

        // Devuelvo una respuesta JSON u otra respuesta según necesites
        return response()->json(['message' => 'Cliente eliminado.']);
    }


    public function updateVisible(Request $request)
    {    

        $cantidad = $this->contarLiquidacionVisible();

        if($cantidad >= 1000 && $request->status == 1){
            return response()->json(['message' => 'Solo puedes hacer visible x Cliente'], 409 );
        }

        $id = $request->id;
        $field = $request->field;
        $status = $request->status;
        $service = MisClientes::findOrFail($id);
        $service->$field = $status;
        $service->save();

        $cantidad = $this->contarLiquidacionVisible();

        return response()->json(['message' => 'Cliente modificado',  'cantidad' => $cantidad]);
    }


    public function contarLiquidacionVisible(){

        $cantidad = MisClientes::where('visible', '=', 1)->count();
        return  $cantidad;
    }
}
