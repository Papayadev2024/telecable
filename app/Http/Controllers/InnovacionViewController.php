<?php

namespace App\Http\Controllers;

use App\Models\InnovacionView;
use App\Http\Requests\StoreInnovacionViewRequest;
use App\Http\Requests\UpdateInnovacionViewRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;

class InnovacionViewController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreInnovacionViewRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(InnovacionView $innovacionView)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(InnovacionView $innovacionView)
    {
        $innovacionview = InnovacionView::first();
        if (!$innovacionview) {
            $innovacionview = InnovacionView::create();
        }
        return view('pages.innovacionview.edit', compact('innovacionview'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $innovacionview = InnovacionView::findOrfail($id); 

        if ($request->hasFile("url_image1section")) {
            $file = $request->file('url_image1section');
            $routeImg = 'storage/images/innovacion/';
            $nombreImagen = Str::random(10) . '_' . $file->getClientOriginalName();
      
            $this->saveImg($file, $routeImg, $nombreImagen);
      
            $innovacionview['url_image1section'] = $routeImg . $nombreImagen;
           
        }
        
        if ($request->hasFile("url_image3section")) {
            $file = $request->file('url_image3section');
            $routeImg = 'storage/images/innovacion/';
            $nombreImagen = Str::random(10) . '_' . $file->getClientOriginalName();
      
            $this->saveImg($file, $routeImg, $nombreImagen);
      
            $innovacionview['url_image3section'] = $routeImg . $nombreImagen;
           
        }

        $innovacionview->update($request->all());

        $innovacionview->save();  

        return back()->with('success', 'Registro actualizado correctamente');
    }

    public function saveImg($file, $route, $nombreImagen)
    {
      $manager = new ImageManager(new Driver());
      $img =  $manager->read($file);
      // $img->coverDown(1000, 1500, 'center');
  
      if (!file_exists($route)) {
        mkdir($route, 0777, true);
      }
  
      $img->save($route . $nombreImagen);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(InnovacionView $innovacionView)
    {
        //
    }
}
