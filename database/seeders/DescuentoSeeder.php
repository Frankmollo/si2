<?php

namespace Database\Seeders;

use App\Models\Descuento;
use Illuminate\Database\Seeder;

class DescuentoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $descuento=New Descuento();
        $descuento->id=1;
        $descuento->monto=20;
        $descuento->save();

        $descuento=New Descuento();
        $descuento->id=2;
        $descuento->monto=10;
        $descuento->save();

        $descuento=New Descuento();
        $descuento->id=3;
        $descuento->monto=30;
        $descuento->save();

        $descuento=New Descuento();
        $descuento->id=4;
        $descuento->monto=5;
        $descuento->save();

        $descuento=New Descuento();
        $descuento->id=5;
        $descuento->monto=0;
        $descuento->save();

        $descuento=New Descuento();
        $descuento->id=6;
        $descuento->monto=40;
        $descuento->save();

        $descuento=New Descuento();
        $descuento->id=7;
        $descuento->monto=35;
        $descuento->save();

        $descuento=New Descuento();
        $descuento->id=8;
        $descuento->monto=15;
        $descuento->save();

        $descuento=New Descuento();
        $descuento->id=9;
        $descuento->monto=25;
        $descuento->save();
    }
}
