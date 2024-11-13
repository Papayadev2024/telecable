<?php

namespace App\Http\Controllers;

use App\Models\HomeView;
use App\Http\Requests\StoreHomeViewRequest;
use App\Http\Requests\UpdateHomeViewRequest;

class HomeViewController extends Controller
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
    public function store(StoreHomeViewRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(HomeView $homeView)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(HomeView $homeView)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateHomeViewRequest $request, HomeView $homeView)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(HomeView $homeView)
    {
        //
    }
}
