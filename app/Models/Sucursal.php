<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sucursal extends Model
{
    protected $fillable = ['nombre'];
    protected $table = 'sucursales'; 
    public function inventarios()
    {
        return $this->hasMany(Inventario::class);
    }
}
