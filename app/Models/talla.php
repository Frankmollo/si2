<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/*SE extiende de la clase model para acceder a los metodos:
    creater
    update
    delete
    etc 

    ELOQUENT
    Para administrar una tabla vamos a crear uno modelo
    modelo Talla, va a administrar una tabla llamada tablas*/

class talla extends Model 
{
    use HasFactory;
    /*usa el nombre de la base de datos 
    SE ESPECIFICA SI Y SOLO SI NO USAMOS LA CONVENCION
    CASO CONTRARIO NO USAR protected $table='tallas';  */
    protected $table='tallas'; 
    protected $fillable = ['numero'];/*INVESTIGAR PARA QUE SIRVE ESTA LINEA */

}
