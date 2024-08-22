<?php

namespace App\Http\Controllers;

use App\Models\MisMarcas;
use App\Http\Requests\StoreMisMarcasRequest;
use App\Http\Requests\UpdateMisMarcasRequest;
use Illuminate\Http\Request;
use Intervention\Image\Drivers\Gd\Driver;
use Intervention\Image\ImageManager;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;

class MisMarcasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $mismarcas = MisMarcas::where("status", "=", true)->get();

        return view('pages.mismarcas.index', compact('mismarcas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.mismarcas.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
        ]);
        $mismarcas = new MisMarcas();
       
        try {
			
			if ($request->hasFile("imagen")) {
				$file = $request->file('imagen');
				$routeImg = 'storage/images/mismarcas/';
				$nombreImagen = Str::random(10) . '_' . $file->getClientOriginalName();
				$this->saveImg($file, $routeImg, $nombreImagen);

                $mismarcas ->url_image = $routeImg;
                $mismarcas ->name_image = $nombreImagen;
			}else{
                $routeImg = 'images/img/';
                $nombreImagen = 'noimagenliquidacion.jpg';

                $mismarcas ->url_image = $routeImg;
                $mismarcas ->name_image = $nombreImagen;
            }

            $mismarcas ->botontext1 = $request->botontext1;
            $mismarcas ->link1 = '/mismarcas';
            $mismarcas ->title = $request->title;
            $mismarcas ->description = $request->description;
            $mismarcas ->save();
    
            return redirect()->route('mismarcas.index')->with('success', 'Marca creado exitosamente.');


		} catch (\Throwable $th) {
			return response()->json(['messge' => 'Verifique sus datos'], 400); 
		}
    }

    /**
     * Display the specified resource.
     */
    public function show(MisMarcas $misMarcas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $mismarcas = MisMarcas::find($id);
 
        return view('pages.mismarcas.edit', compact('mismarcas'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $mismarcas = MisMarcas::findOrfail($id);
      
        try {
			
			if ($request->hasFile("imagen")) {
				$file = $request->file('imagen');
				$routeImg = 'storage/images/mismarcas/';
				$nombreImagen = Str::random(10) . '_' . $file->getClientOriginalName();

                if ($mismarcas->url_image !== 'images/img/') {
                    File::delete($mismarcas->url_image . $mismarcas->name_image);
                }
                  
                $this->saveImg($file, $routeImg, $nombreImagen);
	
                $mismarcas->url_image = $routeImg;
                $mismarcas->name_image = $nombreImagen;

			}

            $mismarcas->title = $request->title;
            $mismarcas->description = $request->description;
            $mismarcas ->botontext1 = $request->botontext1;
            $mismarcas ->link1 = $request->link1;
            $mismarcas->update();

			return redirect()->route('mismarcas.index')->with('success', 'Marca modificado exitosamente.');


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
    public function destroy(MisMarcas $misMarcas)
    {
        //
    }


    public function deleteMisMarcas(Request $request)
    {
        //Recupero el id mandado mediante ajax
        $id = $request->id;
        
        //Busco el servicio con id como parametro
        $service = MisMarcas::findOrfail($id);
        //Modifico el status a false
        $service->status = false;
        //Guardo 
        $service->save();

        // Devuelvo una respuesta JSON u otra respuesta según necesites
        return response()->json(['message' => 'Marca eliminada.']);
    }


    public function updateVisible(Request $request)
    {    
        $cantidad = $this->contarLiquidacionVisible();

        if($cantidad >= 1000 && $request->status == 1){
            return response()->json(['message' => 'Solo puedes hacer visible x Marca'], 409 );
        }

        $id = $request->id;
        $field = $request->field;
        $status = $request->status;
        $service = MisMarcas::findOrFail($id);
        $service->$field = $status;
        $service->save();

        $cantidad = $this->contarLiquidacionVisible();

        return response()->json(['message' => 'Marca modificado',  'cantidad' => $cantidad]);
    }

    public function contarLiquidacionVisible(){

        $cantidad = MisMarcas::where('visible', '=', 1)->count();
        return  $cantidad;
    }
}
