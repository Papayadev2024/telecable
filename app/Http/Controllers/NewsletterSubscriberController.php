<?php

namespace App\Http\Controllers;

use App\Models\NewsletterSubscriber;
use App\Http\Requests\StoreNewsletterSubscriberRequest;
use App\Http\Requests\UpdateNewsletterSubscriberRequest;
use Illuminate\Http\Request;

class NewsletterSubscriberController extends Controller
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
    public function store(StoreNewsletterSubscriberRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(NewsletterSubscriber $newsletterSubscriber)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(NewsletterSubscriber $newsletterSubscriber)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateNewsletterSubscriberRequest $request, NewsletterSubscriber $newsletterSubscriber)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(NewsletterSubscriber $newsletterSubscriber)
    {
        //
    }

    public function showSubscripciones(){
        
        $subscripciones = NewsletterSubscriber::orderBy('created_at','desc')->get();;
        
        return view('pages.subscripciones.index', compact('subscripciones'));

    }
    public function saveSubscripciones(Request $request){
        
        $data = $request->all() ; 
        $data['nombre'] = $data['full_name']; 
        NewsletterSubscriber::create($data);

        // $indexController = new IndexController();
        // $indexController->envioCorreo($data);


        return response()->json(['message'=> 'Subscrito Correctamente']);

    }
    
}
