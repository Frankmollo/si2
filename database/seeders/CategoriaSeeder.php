<?php

namespace Database\Seeders;

use App\Models\Categoria;
use Illuminate\Database\Seeder;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categoria=New Categoria();
        $categoria->id=1;
        $categoria->nombre="Lacteos";
        $categoria->save();

        $categoria=New Categoria();
        $categoria->id=2;
        $categoria->nombre="Cereales";
        $categoria->save();

        $categoria=New Categoria();
        $categoria->id=3;
        $categoria->nombre="Sodas";
        $categoria->save();

        $categoria=New Categoria();
        $categoria->id=4;
        $categoria->nombre="jugos";
        $categoria->save();
    }
}
