<?php

namespace App\Http\Controllers;

use App\Models\Carrito;
use App\Models\Descuento;
use App\Models\Deseo;
use App\Models\Inventario;
use App\Models\Marca;
use App\Models\Producto;
use App\Models\talla;
use App\Models\User;
use Illuminate\Http\Request;

class PromocionController extends Controller
{
    public function index()
    {
        $deseo = Deseo::all();
        $producto = Producto::all();
        //$user = User::all();
        $inventario = Inventario::all();
        $marca = Marca::all();
        $descuento = Descuento::all();
        $talla = talla::all();
        $carrito = Carrito::all();
        return view('promociones.index', compact('deseo','producto', 'inventario', 'marca', 'descuento', 'talla','carrito'));
    }
}
