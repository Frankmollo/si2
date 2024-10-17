<?php

namespace App\Http\Controllers;

use App\Models\Descuento;
use App\Models\Deseo;
use App\Models\Inventario;
use App\Models\Marca;
use App\Models\Producto;
use App\Models\talla;
use Illuminate\Http\Request;
use illuminate\Support\Facades\Storage;
use Spatie\Activitylog\Models\Activity;

class ProductoController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $producto = Producto::all(); //Esto es para mostrar solo 5 productos caso contrario poner ALL();
        $inventario = Inventario::all();
        $marca = Marca::all();
        $descuento = Descuento::all();
        $talla = talla::all();
        return view('productos.index', compact('producto', 'inventario', 'marca', 'descuento', 'talla'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $inventario = Inventario::all();
        $marca = Marca::all();
        $descuento = Descuento::all();
        $talla = talla::all();
        return view('productos.create', compact('inventario', 'marca', 'descuento', 'talla'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'codigo' => 'required|unique:productos'
        ]);

        $producto = new producto();
        $producto->codigo = $request->input('codigo');
        //$producto->color = $request->input('color');
        $producto->precio = $request->input('precio');
        $producto->descripcion = $request->input('descripcion');
        //$producto->id_inventario = $request->input('id_inventario');
        $producto->id_marca = $request->input('id_marca');
        //$producto->id_descuento = $request->input('id_descuento');
        //$producto->id_talla = $request->input('id_talla');
        $producto->foto = $request->input('foto');
        $producto->save();

        //bitacora
        activity()->useLog('gestionar producto')->log('Registro')->subject();
        $lastActivity = Activity::all()->last();
        $lastActivity->subject_id = $producto->id;
        $lastActivity->save();

        return redirect()->route('productos.index', $producto);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $producto = Producto::findOrFail($id);
        $inventario = Inventario::all();
        $marca = Marca::all();
        $descuento = Descuento::all();
        $talla = talla::all();
        return view('productos.show', compact('producto', 'inventario', 'marca', 'descuento', 'talla'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $producto = producto::findOrFail($id);
        $inventario = Inventario::all();
        $marca = Marca::all();
        $descuento = Descuento::all();
        $talla = talla::all();
        //bitacora
        activity()->useLog('gestionar producto')->log('Edito')->subject();
        $lastActivity = Activity::all()->last();
        $lastActivity->subject_id = $producto->id;
        $lastActivity->save();
        return view('productos.edit', compact('producto', 'inventario', 'marca', 'descuento', 'talla'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Producto $producto)
    {
        //$request->validate([
        //    'descripcion' => 'required|unique:productos,descripcion,$producto->id' ]);/*investigar esta linea */

        //$producto=producto::findOrFail($id);
        //$producto->codigo=$request->input('codigo');
        //$producto->save();

        $producto->update($request->all());
        return redirect()->route('productos.index', $producto);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $producto = producto::findOrFail($id);
        $producto->delete();
        //bitacora
        activity()->useLog('gestionar producto')->log('Elimino')->subject();
        $lastActivity = Activity::all()->last();
        $lastActivity->subject_id = $producto->id;
        $lastActivity->save();
        return redirect()->route('productos.index');
    }
}
