<?php

namespace Database\Seeders;

use App\Models\Producto;
use Illuminate\Database\Seeder;

class ProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $producto = new Producto();
        $producto->id = 1;
        $producto->codigo = "3344M99";
        //$producto->color = 'Blanco';
        $producto->precio = '185';
        $producto->descripcion = 'Soda guarana 2L';
        //$producto->id_inventario = 1; /*----*/
        $producto->id_marca = 1;
        //$producto->id_descuento = 2;
        //$producto->id_talla = 7;
        //$producto->id_categoria=3;
        //$producto->id_subcategoria=1;
        $producto->foto = 'https://firebasestorage.googleapis.com/v0/b/imagenes-972f4.appspot.com/o/Productos%2Fshoes-nike.png?alt=media&token=e94e68ee-29e4-4d55-8766-d3a4d551d9eb';
        $producto->save();
        
    }
}
