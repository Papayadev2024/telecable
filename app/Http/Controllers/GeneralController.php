<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreGeneralRequest;
use App\Http\Requests\UpdateGeneralRequest;
use App\Models\Category;
use App\Models\ContactDetail;
use App\Models\General;
use Illuminate\Http\Request;


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
        $datoscontacto = ContactDetail::where("status", "=", 1)->get();
        $general = General::find(1);
        $categorias = Category::where('status', '=', 1)->get();
        // if (!$general) {
        //     return redirect()->back()->with('error', 'El registro no existe');
        // }

        
        return view('pages.general.edit', compact('general','categorias','datoscontacto'));
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
            $detalleContacto = [];
            $general = General::findOrfail($id); 
            
            foreach ($request->all() as $key => $value) {

                if (strstr($key, '-')) {
                  //strpos primera ocurrencia que enuentre
                  if (strpos($key, 'Nombre-') === 0 || strpos($key, 'Nombre-') === 0) {

                    $num = substr($key, strrpos($key, '-') + 1); // Obtener el número de la especificación
                    $detalleContacto[$num]['Nombre'] = $value; // Agregar el título al array asociativo

                  } elseif (strpos($key, 'Celular-') === 0) {

                    $num = substr($key, strrpos($key, '-') + 1); // Obtener el número de la especificación
                    $detalleContacto[$num]['Celular'] = $value; // Agregar las especificaciones al array asociativo

                  } elseif (strpos($key, 'Email-') === 0) {

                    $num = substr($key, strrpos($key, '-') + 1); // Obtener el número de la especificación
                    $detalleContacto[$num]['Email'] = $value; // Agregar las especificaciones al array asociativo
                    
                  } elseif (strpos($key, 'Area-') === 0) {

                    $num = substr($key, strrpos($key, '-') + 1); // Obtener el número de la especificación
                    $detalleContacto[$num]['Area'] = $value; // Agregar las especificaciones al array asociativo
                    
                  }
   
                }
            }




            // Actualizar los campos del registro con los datos del formulario
            $general->update($request->all());

            $this->actualizarEspecificacion($detalleContacto);    
            // Guardar 
            $general->save();  

            return back()->with('success', 'Registro actualizado correctamente');

    }

    private function actualizarEspecificacion($detalleContacto)
    {
      foreach ($detalleContacto as $key => $value) {
        $espect = ContactDetail::find($key);
     
        if ($espect) {
            $espect->categoria_id = $value['Area'];
            $espect->nombre = $value['Nombre'];
            $espect->celular = $value['Celular'];
            $espect->email = $value['Email'];
        } else {
            $espect = new ContactDetail();
            $espect->categoria_id = $value['Area'];
            $espect->nombre = $value['Nombre'];
            $espect->celular = $value['Celular'];
            $espect->email = $value['Email'];
          
        }
        
  
        if ($value['Nombre'] == null) {
          $espect->delete();
        } else {
          $espect->save();
        }
      }
    }


    private function GuardarEspecificaciones($id, $especificaciones)
    {
  
      foreach ($especificaciones as $value) {
        $value['categoria_id'] = $id;
        ContactDetail::create($value);
      }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(General $general)
    {
        //Este es el proceso que borra
    }
}
