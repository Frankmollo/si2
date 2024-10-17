<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Deseo extends Model
{
    use HasFactory;
    protected $table='deseos'; 
    protected $fillable = ['id_user','id_producto'];/*INVESTIGAR PARA QUE SIRVE ESTA LINEA */
}
