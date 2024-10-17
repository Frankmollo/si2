<?php

namespace Database\Seeders;

use App\Models\talla;
use Illuminate\Database\Seeder;

class tallaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $talla=New talla();
        $talla->id=1;
        $talla->numero=33;
        $talla->save();
        
        $talla=New talla();
        $talla->id=2;
        $talla->numero=34;
        $talla->save();

        $talla=New talla();
        $talla->id=3;
        $talla->numero=35;
        $talla->save();
    
        $talla=New talla();
        $talla->id=4;
        $talla->numero=36;
        $talla->save();

        $talla=New talla();
        $talla->id=5;
        $talla->numero=37;
        $talla->save();
        
        $talla=New talla();
        $talla->id=6;
        $talla->numero=38;
        $talla->save();
        
        $talla=New talla();
        $talla->id=7;
        $talla->numero=39;
        $talla->save();
        
        $talla=New talla();
        $talla->id=8;
        $talla->numero=40;
        $talla->save();
        
        $talla=New talla();
        $talla->id=9;
        $talla->numero=41;
        $talla->save();
        
        $talla=New talla();
        $talla->id=10;
        $talla->numero=42;
        $talla->save();
        
        $talla=New talla();
        $talla->id=11;
        $talla->numero=43;
        $talla->save();
        
        $talla=New talla();
        $talla->id=12;
        $talla->numero=44;
        $talla->save();

        $talla=New talla();
        $talla->id=13;
        $talla->numero=45;
        $talla->save();

        $talla=New talla();
        $talla->id=14;
        $talla->numero=30;
        $talla->save();

        $talla=New talla();
        $talla->id=15;
        $talla->numero=31;
        $talla->save();

        $talla=New talla();
        $talla->id=16;
        $talla->numero=32;
        $talla->save();

    }
}
