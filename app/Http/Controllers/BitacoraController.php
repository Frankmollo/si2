<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Activitylog\Models\Activity;
use Illuminate\Support\Facades\DB;

class BitacoraController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('onlyAdmi');
    }
    
    public function index()
    {
        // $actividades = Activity::all(); 
        $actividades = DB::table('activity_log')
             ->join('users', 'activity_log.causer_id', '=', 'users.id')->select('activity_log.*', 'users.name')->get();
        // return $actividades;
        return view('bitacora.index', compact('actividades'));
    }
}
