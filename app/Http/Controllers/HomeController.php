<?php

namespace App\Http\Controllers;

use App\Models\Descuento;
use App\Models\Detalleventa;
use App\Models\Marca;
use App\Models\Notaventa;
use App\Models\Producto;
use App\Models\talla;
use App\Models\User;
use Illuminate\Http\Request;

/* COMENTARIO KARLA: PAGINA PRINCIPAL
EL CONTROLADOR NO MUESTRA DIRECTO EL CODE HTML
DEBEMOS CREAR LAS VISTAS (VIEW) */

/*CONTROLLER HomeController POR DEFECTO */

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth')->only('create');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        return view('welcome');
    }

    public function create()
    {
        $notaventa = Notaventa::all();
        $detalleventa = Detalleventa::all();
        $producto = Producto::all();
        $marca = Marca::all();
        $descuento = Descuento::all();
        $talla = talla::all();
        $user = User::all();

        return view('home', compact('notaventa', 'detalleventa', 'producto', 'marca', 'descuento', 'talla', 'user'));
    }
}
