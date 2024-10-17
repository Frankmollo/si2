<?php

namespace App\Http\Controllers;

use App\Models\Descuento;
use App\Models\Marca;
use App\Models\Producto;
use App\Models\talla;
use Illuminate\Http\Request;

class DetalleproductoController extends Controller
{
    public function show($id)
    {
        //$deseo = Deseo::where('id_user', Auth::id())->get();
        $producto = Producto::findOrFail($id);
        $productoAll = Producto::all();
        $talla = talla::all();
        $descuento = Descuento::all();
        $marca = Marca::all();
        return view('detalleproductos.show', compact('producto', 'productoAll', 'talla','descuento','marca'));
    }
}
