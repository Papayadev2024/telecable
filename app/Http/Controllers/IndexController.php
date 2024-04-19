<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreIndexRequest;
use App\Http\Requests\UpdateIndexRequest;
use App\Models\Attributes;
use App\Models\AttributesValues;
use App\Models\Faqs;
use App\Models\General;
use App\Models\Index;
use App\Models\Message;
use App\Models\Products;
use App\Models\Slider;
use App\Models\Strength;
use App\Models\Testimony;
use App\Models\Category;
use Illuminate\Http\Request;


class IndexController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $productos = Products::all();
        $categorias = Category::all();
        $destacados = Products::where('destacar','=', 1)->get();
        $descuentos = Products::where('descuento','>', 0)->get();

        $general = General::all();
        $benefit= Strength::where('status','=', 1)->get();
        $faqs= Faqs::where('status','=', 1)->where('visible', '=' ,1)->get();
        $testimonie = Testimony::where('status','=', 1)->where('visible', '=' ,1)->get();
        $slider= Slider::where('status','=', 1)->where('visible', '=' ,1)->get();

        

        
        return view('public.index', compact('productos', 'destacados', 'descuentos', 'general', 'benefit', 'faqs', 'testimonie', 'slider', 'categorias'));
    }

    public function catalogo()
    {
        $general = General::all();
        return view('public.catalogo', compact('general'));
    }

    public function comentario()
    {
        $general = General::all();
        return view('public.comentario', compact('general'));
    }

    public function contacto()
    {
        $general = General::all();
        return view('public.contact', compact('general'));
    }

    public function carrito()
    {
        //
        return view('public.checkout_carrito');
    }

    public function pago()
    {
        //
        return view('public.checkout_pago');
    }

    public function agradecimiento()
    {
        //
        return view('public.checkout_agradecimiento');
    }

    public function micuenta()
    {
        //
        return view('public.dashboard');
    }


    public function pedidos()
    {
        //
        return view('public.dashboard_order');
    }


    public function direccion()
    {
        //
        return view('public.dashboard_direccion');
    }

    public function error()
    {
        //
        return view('public.404');
    }

    public function producto(string $id)
    {

        $productos = Products::where('id', '=', $id)->get();

        $IdProductosComplementarios = $productos->toArray();
        $IdProductosComplementarios= $IdProductosComplementarios[0]['categoria_id'];

        $ProdComplementarios = Products::where('categoria_id', '=', $IdProductosComplementarios)->get(); 
        $atributos = Attributes::where("status", "=", true)->get();
        $valorAtributo = AttributesValues::where("status", "=", true)->get();

        return view('public.product', compact('productos', 'atributos', 'valorAtributo', 'ProdComplementarios'));
    }

    //  --------------------------------------------
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
    public function store(StoreIndexRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Index $index)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Index $index)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateIndexRequest $request, Index $index)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Index $index)
    {
        //
    }

    /**
     * Save contact from blade
     */
    public function guardarContacto(Request $request)
    {
        //Del modelo
        //'full_name', 'email', 'phone', 'message', 'status', 'is_read'

        $reglasValidacion = [
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|integer|max:99999999999',
        ];
        $mensajes = [
            'name.required' => 'El campo nombre es obligatorio.',
            'email.required' => 'El campo correo electrónico es obligatorio.',
            'email.email' => 'El formato del correo electrónico no es válido.',
            'email.max' => 'El campo correo electrónico no puede tener más de :max caracteres.',
            'phone.required' => 'El campo teléfono es obligatorio.',
            'phone.integer' => 'El campo teléfono debe ser un número entero.',
        ];
        $request->validate($reglasValidacion, $mensajes);
        $formlanding = Message::create($request->all());
        // return redirect()->route('landingaplicativos', $formlanding)->with('mensaje','Mensaje enviado exitoso')->with('name', $request->nombre);
        return response()->json(['message' => 'Mensaje enviado con exito']);
    }
}
