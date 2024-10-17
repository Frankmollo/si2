<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;
    protected $table = 'productos';
    protected $fillable = ['codigo', 'color', 'precio', 'descripcion', 'id_inventario', 'id_marca', 'id_descuento', 'id_talla', 'id_categoria', 'id_subcategoria', 'foto'];
}
