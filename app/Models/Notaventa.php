<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notaventa extends Model
{
    use HasFactory;
    protected $table='notaventas'; 
    protected $fillable = ['monto_total','id_vendedor','id_cliente'];
}
