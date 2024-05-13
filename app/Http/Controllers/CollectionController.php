<?php

namespace App\Http\Controllers;

use App\Models\Collection;
use App\Http\Requests\StoreCollectionRequest;
use App\Http\Requests\UpdateCollectionRequest;
use Illuminate\Support\Facades\File;
use Intervention\Image\Drivers\Gd\Driver;
use Intervention\Image\ImageManager;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class CollectionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $collection = Collection::where('status', '=', true)->get();

        return view('pages.collection.index', compact('collection'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.collection.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $collection = new Collection();

        if ($request->hasFile('imagen')) {
            $manager = new ImageManager(Driver::class);

            $nombreImagen = Str::random(10) . '_' . $request->file('imagen')->getClientOriginalName();

            $img = $manager->read($request->file('imagen'));

            // Obtener las dimensiones de la imagen que se esta subiendo
            // $img->coverDown(640, 640, 'center');

            $ruta = 'storage/images/collection/';

            if (!file_exists($ruta)) {
                mkdir($ruta, 0777, true); // Se crea la ruta con permisos de lectura, escritura y ejecución
            }

            $img->save($ruta . $nombreImagen);

            $collection->url_image = $ruta;
            $collection->name_image = $nombreImagen;
        }

        $slug = strtolower(str_replace(' ', '-', $request->name));

        if (Collection::where('slug', $slug)->exists()) {
            // Si el slug existe, agregar un número aleatorio al final
            $slug .= '-' . rand(1, 1000); // Puedes ajustar el rango según tu necesidad
        }

        $collection->name = $request->name;
        $collection->description = $request->description;
        $collection->slug = $slug;
        $collection->status = 1;
        $collection->visible = 1;

        $collection->save();

        return redirect()->route('colecciones.index')->with('success', 'Colección creada');
    }

    /**
     * Display the specified resource.
     */
    public function show(Collection $collection)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Collection $collection, $id)
    {
        $collection = Collection::findOrfail($id);

        return view('pages.collection.edit', compact('collection'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $collection = Collection::findOrfail($id);

        if ($request->hasFile('imagen')) {
            $manager = new ImageManager(new Driver());

            $ruta = storage_path() . '/app/public/images/collection/' . $collection->name_image;

            // dd($ruta);
            if (File::exists($ruta)) {
                File::delete($ruta);
            }

            $rutanueva = 'storage/images/collection/';
            $nombreImagen = Str::random(10) . '_' . $request->file('imagen')->getClientOriginalName();

            $img = $manager->read($request->file('imagen'));

            // $img->coverDown(640, 640, 'center');

            if (!file_exists($rutanueva)) {
                mkdir($rutanueva, 0777, true); // Se crea la ruta con permisos de lectura, escritura y ejecución
            }

            $img->save($rutanueva . $nombreImagen);

            $collection->url_image = $rutanueva;
            $collection->name_image = $nombreImagen;
        }

        $slug = strtolower(str_replace(' ', '-', $request->name));

        if (Collection::where('slug', $slug)->exists()) {
            // Si el slug existe, agregar un número aleatorio al final
            $slug .= '-' . rand(1, 1000); // Puedes ajustar el rango según tu necesidad
        }

        $collection->name = $request->name;
        $collection->description = $request->description;
        $collection->slug = $slug;

        $collection->save();

        return redirect()->route('colecciones.index')->with('success', 'Colección modificada');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Collection $collection)
    {
        //
    }



    public function deleteCollection(Request $request)
    {
        $id = $request->id;
       
        $category = Collection::findOrfail($id); 
       
        $category->status = false;
       
        $category->save();

        return response()->json(['message' => 'Colección eliminada']);
    }


    
    public function updateVisible(Request $request)
    {
 
        $id = $request->id;

        $field = $request->field;

        $status = $request->status;

        // Actualizar el estado de la categoría
        $category = Collection::findOrFail($id);

        $category->$field = $status;

        $category->save();
        
        return response()->json(['message' => 'Colección modificada']);
    
    }
}
