<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carrito extends Model
{
    use HasFactory;
    protected $table='carritos'; 
    protected $fillable = ['cantidad','id_user','id_producto'];/*INVESTIGAR PARA QUE SIRVE ESTA LINEA */
}
