<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreServiceRequest;
use App\Http\Requests\UpdateServiceRequest;
use App\Models\Service;
use Illuminate\Http\Request;
// use Intervention\Image\Facades\Image;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;
// use Illuminate\Support\Facades\Image;
use Illuminate\Support\Str;


class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $servicios = Service::all();
        return view('pages.service.index', compact('servicios'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('pages.service.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function test(){

        // dd(public_path('images/user-36-01.jpg'));
        $manager = new ImageManager(new Driver());

        $image = $manager->read(public_path('images/user-36-01.jpg'));

        $ruta = storage_path('app/public/images/user-36-01.jpg')   ;

        dd($ruta);
        
        // $image = Image::make(public_path('images/user-36-01.jpg'));
        $image->scale(width: 300);
        
        // $image->crop(10,5);
        $image->toPng()->save(public_path('images/crop.png'));
        

    }


    public function store(Request $request)
    {
        $request->validate([
            'title'=>'required',
        ]);


        $service = new Service();


        if($request->hasFile("imagen")){
           
            $manager = new ImageManager(new Driver());
            
            $nombreImagen = Str::random(10) . '_' . $request->file('imagen')->getClientOriginalName();
               
            $img =  $manager->read($request->file('imagen'));
           
            $ruta = storage_path() . '/app/public/images/servicios/';
   
            $img = $img->resize(600,200)->save($ruta.$nombreImagen);

            $service->url_image = $ruta;
           
            $service->name_image = $nombreImagen;
            
        }

            $service->title = $request->title;
            $service->description = $request->description;
            $service->status = 1;
            
            $service->save();
    }

    /**
     * Display the specified resource.
     */
    public function show(Service $service)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Service $service)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateServiceRequest $request, Service $service)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Service $service)
    {
        //
    }
}
