<?php

namespace App\Http\Controllers;

use App\Models\Descuento;
use Illuminate\Http\Request;
use Spatie\Activitylog\Models\Activity;

class DescuentoController extends Controller
{
 
    public function __construct()
    {
        $this->middleware('auth');
     
    }

    public function index()
    {
        $descuento = Descuento::all();
        return view('descuentos.index', compact('descuento'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('descuentos.create');
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
            'monto' => 'required|unique:descuentos'
        ]);

        $descuento = new Descuento();
        $descuento->monto = $request->input('monto');
        $descuento->save();
        //bitacora
        activity()->useLog('gestionar descuentos')->log('Registro')->subject();
        $lastActivity = Activity::all()->last();
        $lastActivity->subject_id = $descuento->id;
        $lastActivity->save();
        return redirect()->route('descuentos.index');
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
        $descuento = Descuento::findOrFail($id);
        //bitacora
        activity()->useLog('gestionar descuentos')->log('Edito')->subject();
        $lastActivity = Activity::all()->last();
        $lastActivity->subject_id = $descuento->id;
        $lastActivity->save();
        return view('descuentos.edit', compact('descuento'));
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
        $request->validate([
            'monto' => 'required|unique:descuentos'
        ]);

        $descuento = Descuento::findOrFail($id);

        $descuento->monto = $request->input('monto');
        $descuento->save();
        return redirect()->route('descuentos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $descuento = Descuento::findOrFail($id);
        $descuento->delete();
        //bitacora
        activity()->useLog('gestionar descuentos')->log('Elimino')->subject();
        $lastActivity = Activity::all()->last();
        $lastActivity->subject_id = $descuento->id;
        $lastActivity->save();
        return redirect()->route('descuentos.index');
    }
}
