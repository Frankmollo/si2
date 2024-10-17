<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

/*CONTROLLER Controller POR DEFECTO */

/*PARA CREAR UN CONTROLLER POR CONVENSION:
    php artisan make:controller NombreController */
    //AgregarvendedoresController
class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}
