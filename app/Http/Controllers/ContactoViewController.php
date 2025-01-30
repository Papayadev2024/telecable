<?php

namespace App\Http\Controllers;

use App\Models\ContactoView;
use App\Http\Requests\StoreContactoViewRequest;
use App\Http\Requests\UpdateContactoViewRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;

class ContactoViewController extends Controller
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
    public function store(StoreContactoViewRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(ContactoView $contactoView)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ContactoView $contactoView)
    {
        $homeview = ContactoView::first();
        if (!$homeview) {
            $homeview = ContactoView::create();
        }

        return view('pages.contactoview.edit', compact('homeview'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $homeview = ContactoView::findOrfail($id); 

        if ($request->hasFile("url_image1section")) {
            $file = $request->file('url_image1section');
            $routeImg = 'storage/images/viewcontact/';
            $nombreImagen = Str::random(10) . '_' . $file->getClientOriginalName();
      
            $this->saveImg($file, $routeImg, $nombreImagen);
      
            $homeview['url_image1section'] = $routeImg . $nombreImagen;
           
        } 

        
        $homeview->update($request->all());

        $homeview->save();  

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
    public function destroy(ContactoView $contactoView)
    {
        //
    }
}
