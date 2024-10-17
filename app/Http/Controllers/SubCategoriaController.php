<?php

namespace App\Http\Controllers;

use App\Models\SubCategoria;
use Illuminate\Http\Request;

class SubCategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subCategorias = SubCategoria::all();
        return view('subcategorias.index' , compact('subCategorias'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('subcategorias.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $subCategoria = new SubCategoria();
        $subCategoria->nombre = $request->input('nombre');
        $subCategoria->categoria_id = $request->input('categoria');
        $subCategoria->save();
        //bitacora
        /*
        activity()->useLog('gestionar talla')->log('Registro')->subject();
        $lastActivity = Activity::all()->last();
        $lastActivity->subject_id = $talla->id;
        $lastActivity->save();
        */
        return redirect()->route('subcategorias.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $subCategoria = SubCategoria::findOrFail($id);
        //bitacora
        /*
        activity()->useLog('gestionar talla')->log('Edito')->subject();
        $lastActivity = Activity::all()->last();
        $lastActivity->subject_id = $talla->id;
        $lastActivity->save();
        */
        return view('subcategorias.edit', compact('subCategoria'));
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
        $subCategoria = SubCategoria::findOrFail($id);
        $subCategoria->nombre = $request->input('nombre');
        $subCategoria->categoria_id = $request->input('categoria');
        $subCategoria->save();
        return redirect()->route('subcategorias.index');
    }
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $subCategoria = SubCategoria::findOrFail($id);
        $subCategoria->delete();
        //bitacora
        /*
        activity()->useLog('gestionar talla')->log('Elimino')->subject();
        $lastActivity = Activity::all()->last();
        $lastActivity->subject_id = $talla->id;
        $lastActivity->save();
        */
        return redirect()->route('subcategorias.index');
    }
}
