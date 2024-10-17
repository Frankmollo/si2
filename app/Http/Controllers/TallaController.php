<?php

namespace App\Http\Controllers;

use App\Models\talla;
use Illuminate\Http\Request;
use Spatie\Activitylog\Models\Activity;

class TallaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');

    }
    
    public function index()
    {
        $talla = talla::all();
        return view('tallas.index', compact('talla'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tallas.create');
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
            'numero' => 'required|unique:tallas'
        ]);

        $talla = new talla();
        $talla->numero = $request->input('numero');
        $talla->save();
        //bitacora
        activity()->useLog('gestionar talla')->log('Registro')->subject();
        $lastActivity = Activity::all()->last();
        $lastActivity->subject_id = $talla->id;
        $lastActivity->save();
        return redirect()->route('tallas.index');
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
        $talla = talla::findOrFail($id);
        //bitacora
        activity()->useLog('gestionar talla')->log('Edito')->subject();
        $lastActivity = Activity::all()->last();
        $lastActivity->subject_id = $talla->id;
        $lastActivity->save();
        return view('tallas.edit', compact('talla'));
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
            'numero' => 'required|unique:tallas'
        ]);

        $talla = talla::findOrFail($id);

        $talla->numero = $request->input('numero');
        $talla->save();
        return redirect()->route('tallas.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $talla = talla::findOrFail($id);
        $talla->delete();
        //bitacora
        activity()->useLog('gestionar talla')->log('Elimino')->subject();
        $lastActivity = Activity::all()->last();
        $lastActivity->subject_id = $talla->id;
        $lastActivity->save();
        return redirect()->route('tallas.index');
    }
}
