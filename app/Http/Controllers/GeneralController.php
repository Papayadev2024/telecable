<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreGeneralRequest;
use App\Http\Requests\UpdateGeneralRequest;
use App\Models\General;

class GeneralController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //llames a los registros para mostrarlos en tabla
        
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //El formjulario para crear
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreGeneralRequest $request)
    {
        //este es el proceso que crea
    }

    /**
     * Display the specified resource.
     */
    public function show(General $general)
    {
        //este es el que muestra
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(General $general)
    {
        //El que muestra el form para editar
        //return "mostrar el unico registro";
        return view('pages.general.edit');
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateGeneralRequest $request, General $general)
    {
        //Este es el proceso que actualiza
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(General $general)
    {
        //Este es el proceso que borra
    }
}
