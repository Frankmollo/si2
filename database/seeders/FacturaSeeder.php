<?php

namespace Database\Seeders;

use App\Models\Factura;
use Illuminate\Database\Seeder;

class FacturaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $factura=New Factura();
        $factura->id=1;
        $factura->Nro_aut=3000;
        $factura->Fecha_f="2021-12-05 09:05:00";
        $factura->nit=62879056;
        $factura->monTotal=220;
        $factura->Id_venta=1;
        $factura->save();

        $factura=New Factura();
        $factura->id=2;
        $factura->Nro_aut=3001;
        $factura->Fecha_f="2021-12-05 09:35:00";
        $factura->nit=60854641;
        $factura->monTotal=220;
        $factura->Id_venta=2;
        $factura->save();

        $factura=New Factura();
        $factura->id=3;
        $factura->Nro_aut=3002;
        $factura->Fecha_f="2021-12-05 09:45:00";
        $factura->nit=70223456;
        $factura->monTotal=250;
        $factura->Id_venta=3;
        $factura->save();

        $factura=New Factura();
        $factura->id=4;
        $factura->Nro_aut=3003;
        $factura->Fecha_f="2021-12-05 11:05:00";
        $factura->nit=63456754;
        $factura->monTotal=220;
        $factura->Id_venta=4;
        $factura->save();

        $factura=New Factura();
        $factura->id=5;
        $factura->Nro_aut=3004;
        $factura->Fecha_f="2021-12-05 12:50:00";
        $factura->nit=75123484;
        $factura->monTotal=220;
        $factura->Id_venta=5;
        $factura->save();

        $factura=New Factura();
        $factura->id=6;
        $factura->Nro_aut=3005;
        $factura->Fecha_f="2021-12-05 13:15:00";
        $factura->nit=75373676;
        $factura->monTotal=520;
        $factura->Id_venta=6;
        $factura->save();

        $factura=New Factura();
        $factura->id=7;
        $factura->Nro_aut=3006;
        $factura->Fecha_f="2021-12-05 13:45:00";
        $factura->nit=65234565;
        $factura->monTotal=820;
        $factura->Id_venta=7;
        $factura->save();

        $factura=New Factura();
        $factura->id=8;
        $factura->Nro_aut=3007;
        $factura->Fecha_f="2021-12-05 14:55:00";
        $factura->nit=76542315;
        $factura->monTotal=720;
        $factura->Id_venta=8;
        $factura->save();

        $factura=New Factura();
        $factura->id=9;
        $factura->Nro_aut=3008;
        $factura->Fecha_f="2021-12-05 15:22:00";
        $factura->nit=65874532;
        $factura->monTotal=250;
        $factura->Id_venta=9;
        $factura->save();

        $factura=New Factura();
        $factura->id=10;
        $factura->Nro_aut=3009;
        $factura->Fecha_f="2021-12-05 15:58:00";
        $factura->nit=78923445;
        $factura->monTotal=420;
        $factura->Id_venta=10;
        $factura->save();

        $factura=New Factura();
        $factura->id=11;
        $factura->Nro_aut=3010;
        $factura->Fecha_f="2021-12-05 16:33:00";
        $factura->nit=77564232;
        $factura->monTotal=220;
        $factura->Id_venta=11;
        $factura->save();

        $factura=New Factura();
        $factura->id=12;
        $factura->Nro_aut=3011;
        $factura->Fecha_f="2021-12-05 16:49:00";
        $factura->nit=65875331;
        $factura->monTotal=350;
        $factura->Id_venta=12;
        $factura->save();

        $factura=New Factura();
        $factura->id=13;
        $factura->Nro_aut=3012;
        $factura->Fecha_f="2021-12-05 17:25:00";
        $factura->nit=76231455;
        $factura->monTotal=250;
        $factura->Id_venta=13;
        $factura->save();

        $factura=New Factura();
        $factura->id=14;
        $factura->Nro_aut=3013;
        $factura->Fecha_f="2021-12-05 17:56:00";
        $factura->nit=63254521;
        $factura->monTotal=260;
        $factura->Id_venta=14;
        $factura->save();

        $factura=New Factura();
        $factura->id=15;
        $factura->Nro_aut=3014;
        $factura->Fecha_f="2021-12-05 18:36:00";
        $factura->nit=60875121;
        $factura->monTotal=520;
        $factura->Id_venta=15;
        $factura->save();

        $factura=New Factura();
        $factura->id=16;
        $factura->Nro_aut=3015;
        $factura->Fecha_f="2021-12-05 18:53:00";
        $factura->nit=61454523;
        $factura->monTotal=440;
        $factura->Id_venta=16;
        $factura->save();
    }
}
