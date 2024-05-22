<?php

namespace App\Http\Controllers;

use App\Models\Ordenes;
use Illuminate\Http\Request;

class PedidosController extends Controller
{
    public function listadoPedidos()
    {
        
        $orders = Ordenes::with('usuarioPedido')->with('statusOrdenes')->get();
        
        return view('pages.orders.index', compact('orders'));  
    }


    public function verPedido($id)
    {
        $orders = Ordenes::where('id',  $id)->with('usuarioPedido')->with('statusOrdenes')->first();
       
        return view('pages.orders.show', compact('orders'));

    }
}
