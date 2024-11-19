<?php

namespace App\Http\Controllers;

use App\Models\ProductosView;
use App\Http\Requests\StoreProductosViewRequest;
use App\Http\Requests\UpdateProductosViewRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;

class ProductosViewController extends Controller
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
    public function store(StoreProductosViewRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(ProductosView $productosView)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ProductosView $productosView)
    {
        $productostext = ProductosView::first();
        if (!$productostext) {
            $productostext = ProductosView::create();
        }
        return view('pages.productosview.edit', compact('productostext'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $productostext = ProductosView::findOrfail($id); 

        if ($request->hasFile("url_image2section")) {
            $file = $request->file('url_image2section');
            $routeImg = 'storage/images/productosview/';
            $nombreImagen = Str::random(10) . '_' . $file->getClientOriginalName();
      
            $this->saveImg($file, $routeImg, $nombreImagen);
      
            $productostext['url_image2section'] = $routeImg . $nombreImagen;
           
        } 

        $productostext->update($request->all());

        $productostext->save();  

        return back()->with('success', 'Registro actualizado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ProductosView $productosView)
    {
        //
    }
}
