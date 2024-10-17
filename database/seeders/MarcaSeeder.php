<?php

namespace Database\Seeders;

use App\Models\Marca;
use Illuminate\Database\Seeder;

class MarcaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $marca=New Marca();
        $marca->id=1;
        $marca->nombre="Pil";
        $marca->save();

        $marca=New Marca();
        $marca->id=2;
        $marca->nombre="CocaCola";
        $marca->save();

        $marca=New Marca();
        $marca->id=3;
        $marca->nombre="Simba";
        $marca->save();
        
        $marca=New Marca();
        $marca->id=4;
        $marca->nombre="Lazaroni";
        $marca->save();
        
        $marca=New Marca();
        $marca->id=5;
        $marca->nombre="Sofia";
        $marca->save();
        
        $marca=New Marca();
        $marca->id=6;
        $marca->nombre="Mogul";
        $marca->save();
        
        $marca=New Marca();
        $marca->id=7;
        $marca->nombre="Delizia";
        $marca->save();

        $marca=New Marca();
        $marca->id=8;
        $marca->nombre="Reebok";
        $marca->save();
    }
}
