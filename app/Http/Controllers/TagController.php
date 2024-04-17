<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use App\Http\Requests\StoreTagRequest;
use App\Http\Requests\UpdateTagRequest;
use Illuminate\Http\Request;


class TagController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tags = Tag::where("status", "=", true)->get();
       
        return view('pages.tags.index', compact('tags'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.tags.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $category = new Tag(); 
       
        $category->name = $request->name;
        $category->type = $request->type;
       
        $category->save();
       
        return redirect()->route('tags.index')->with('success', 'Etiqueta creada');
    }

    /**
     * Display the specified resource.
     */
    public function show(Tag $tag)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {

        
        $tag = Tag::findOrfail($id);

        
        // $idtag = $tag->id;
        // $tag = Tag::where('id', $idtag)->first();
        
        return view('pages.tags.edit', compact('tag'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $tag = Tag::findOrfail($id); 
        // $tag = Tag::where('id', $id)->first();

        $tag->update($request->all());

        $tag->save();

        return redirect()->route('tags.index')->with('success', 'Categoria modificada');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tag $tag)
    {
        //
    }

    public function deleteCategory(Request $request)
    {
        $id = $request->id;
       
        $category = Tag::findOrfail($id); 
       
        $category->status = false;
       
        $category->save();

        return response()->json(['message' => 'Tag eliminada']);
    }



    public function updateVisible(Request $request)
    {
        // Lógica para manejar la solicitud AJAX
       
        $id = $request->id;

        $field = $request->field;
        
        $status = $request->status;

        $category = Tag::findOrFail($id);
        
        $category->$field = $status;

        $category->save();

         return response()->json(['message' => 'Tag modificada']);
    
    }

}
