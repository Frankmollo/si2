<?php

namespace App\Http\Controllers;

use App\Models\Inventario;
use App\Models\Sucursal;
use Illuminate\Http\Request;

class InventarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $inventarios = Inventario::with(['categoria', 'subcategoria', 'sucursal'])->get();
        return view('inventarios.index', compact('inventarios'));
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $sucursales = Sucursal::all(); // Obtener todas las sucursales
        return view('inventarios.create'); // Retorna la vista con las sucursales para asociar a inventario
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
            'categoria_id' => 'required|exists:categorias,id', // Asegura que exista
            'subcategoria_id' => 'required|exists:subcategorias,id', // Asegura que exista
            'sucursal_id' => 'required|exists:sucursales,id', // Asegura que exista
            'cantidad' => 'required|integer', // Asegúrate que sea un número entero
        ]);
    
        $inventario = new Inventario();
        $inventario->categoria_id = $request->input('categoria_id');
        $inventario->subcategoria_id = $request->input('subcategoria_id');
        $inventario->sucursal_id = $request->input('sucursal_id');
        $inventario->cantidad = $request->input('cantidad');
    
        $inventario->save();
    
        return redirect()->route('inventarios.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $inventario = Inventario::findOrFail($id); // Encuentra el inventario por su ID
        return view('inventarios.show', compact('inventario')); // Retorna la vista de detalle de inventario
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $inventario = Inventario::findOrFail($id); // Encuentra el inventario por su ID
        $sucursales = Sucursal::all(); // Obtiene todas las sucursales
        return view('inventarios.edit', compact('inventario', 'sucursales')); // Retorna la vista de edición de inventario
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $inventario = Inventario::findOrFail($id); // Encuentra el inventario por su ID
        $inventario->producto = $request->input('producto'); // Actualiza el nombre del producto
        $inventario->cantidad = $request->input('cantidad'); // Actualiza la cantidad
        $inventario->precio = $request->input('precio'); // Actualiza el precio
        $inventario->sucursal_id = $request->input('sucursal_id'); // Actualiza la sucursal
        $inventario->save(); // Guarda los cambios en la base de datos

        return redirect()->route('inventarios.index'); // Redirige al listado de inventarios después de actualizar
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $inventario = Inventario::findOrFail($id); // Encuentra el inventario por su ID
        $inventario->delete(); // Elimina el inventario de la base de datos

        return redirect()->route('inventarios.index'); // Redirige al listado de inventarios después de eliminar
    }

    /**
     * Display a listing of the resource filtered by sucursal.
     *
     * @param  int  $sucursal_id
     * @return \Illuminate\Http\Response
     */
    public function sucursalInventario($sucursal_id)
    {
        $sucursal = Sucursal::findOrFail($sucursal_id); // Encuentra la sucursal por su ID
        $inventarios = Inventario::where('sucursal_id', $sucursal_id)->get(); // Filtra inventarios por sucursal
        return view('inventarios.sucursal', compact('sucursal', 'inventarios')); // Retorna la vista de inventarios filtrados por sucursal
    }
}
