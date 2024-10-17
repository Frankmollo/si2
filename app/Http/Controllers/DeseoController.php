<?php

namespace App\Http\Controllers;

use App\Models\Deseo;
use App\Models\Producto;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Spatie\Activitylog\Models\Activity;

class DeseoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $deseo = Deseo::where('id_user', Auth::id())->get();
        
        $producto = Producto::all();
        $user = User::all();
        return view('deseos.index', compact('deseo','producto','user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $producto = Producto::all();
        $user = User::all();
        return view('deseos.create', compact('producto','user'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        date_default_timezone_set("America/La_Paz");
        $request->validate([
            'id_producto' => 'required|unique:deseos'
        ]);

        $deseo = new Deseo();
        $deseo->id_producto = $request->input('id_producto');
        $deseo->id_user = $request->input('id_user');
        $deseo->save();
        //bitacora
        activity()->useLog('gestionar deseo')->log('Registro')->subject();
        $lastActivity = Activity::all()->last();
        $lastActivity->subject_id = $deseo->id;
        $lastActivity->save();
        return redirect()->route('deseos.index', $deseo);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $deseo = Deseo::findOrFail($id);
        $producto = Producto::all();
        $user = User::all();
        return view('promocion.index', compact('deseo','producto','user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $deseo = Deseo::findOrFail($id);
        $producto = Producto::all();
        $user = User::all();
        //bitacora
        activity()->useLog('gestionar deseo')->log('Edito')->subject();
        $lastActivity = Activity::all()->last();
        $lastActivity->subject_id = $deseo->id;
        $lastActivity->save();
        return view('deseos.edit', compact('deseo','producto','user'));
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
        date_default_timezone_set("America/La_Paz");
        $request->validate([
            'id_producto' => 'required|unique:deseos'
        ]);

        $deseo = Deseo::findOrFail($id);

        $deseo->id_producto = $request->input('id_producto');
        $deseo->id_user = $request->input('id_user');
        $deseo->save();
        return redirect()->route('deseos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $deseo = Deseo::findOrFail($id);
        $deseo->delete();
        //bitacora
        activity()->useLog('gestionar deseo')->log('Elimino')->subject();
        $lastActivity = Activity::all()->last();
        $lastActivity->subject_id = $deseo->id;
        $lastActivity->save();
        return redirect()->route('deseos.index');
    }
}
