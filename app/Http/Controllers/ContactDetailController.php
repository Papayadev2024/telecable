<?php

namespace App\Http\Controllers;

use App\Models\ContactDetail;
use App\Http\Requests\StoreContactDetailRequest;
use App\Http\Requests\UpdateContactDetailRequest;

class ContactDetailController extends Controller
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
    public function store(StoreContactDetailRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(ContactDetail $contactDetail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ContactDetail $contactDetail)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateContactDetailRequest $request, ContactDetail $contactDetail)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ContactDetail $contactDetail)
    {
        //
    }
}
