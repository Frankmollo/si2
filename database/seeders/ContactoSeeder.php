<?php

namespace Database\Seeders;

use App\Models\Contacto;
use Illuminate\Database\Seeder;

class ContactoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $contacto=New Contacto();
        $contacto->nombre="nuevo cliente";
        $contacto->correo="alguien@gmail.com";
        $contacto->asunto="consulta";
        $contacto->mensaje="hola buenas noches";
        $contacto->estado=null;
        $contacto->save();

        $contacto=New Contacto();
        $contacto->nombre="nuevo cliente";
        $contacto->correo="alguien@gmail.com";
        $contacto->asunto="reclamo";
        $contacto->mensaje="hola no me llego ";
        $contacto->estado=null;
        $contacto->save();

        /*----------------------------------------------------------------*/
        $contacto=New Contacto();
        $contacto->nombre="nuevo cliente1";
        $contacto->correo="AlguienMas@gmail.com";
        $contacto->asunto="consulta";
        $contacto->mensaje="disculpen cuales son los precios";
        $contacto->estado=null;
        $contacto->save();

        $contacto=New Contacto();
        $contacto->nombre="nuevo cliente0";
        $contacto->correo="alguien4@gmail.com";
        $contacto->asunto="consulta";
        $contacto->mensaje="hola buenas";
        $contacto->estado=null;
        $contacto->save();

        $contacto=New Contacto();
        $contacto->nombre="cliente frecuente";
        $contacto->correo="alguien5@gmail.com";
        $contacto->asunto="consulta";
        $contacto->mensaje="hola buenas cuanto llegan nuevos modelos";
        $contacto->estado=null;
        $contacto->save();

        $contacto=New Contacto();
        $contacto->nombre="otro cliente";
        $contacto->correo="alguien6@gmail.com";
        $contacto->asunto="consulta";
        $contacto->mensaje="hola mundo";
        $contacto->estado=null;
        $contacto->save();

        $contacto=New Contacto();
        $contacto->nombre="cliente antiguo";
        $contacto->correo="alguien7@gmail.com";
        $contacto->asunto="consulta";
        $contacto->mensaje="hola precios porfavor";
        $contacto->estado=null;
        $contacto->save();

        $contacto=New Contacto();
        $contacto->nombre="nuevo cliente2";
        $contacto->correo="alguien8@gmail.com";
        $contacto->asunto="consulta";
        $contacto->mensaje="hola buenas";
        $contacto->estado=null;
        $contacto->save();

        $contacto=New Contacto();
        $contacto->nombre="un cliente mas";
        $contacto->correo="alguien9@gmail.com";
        $contacto->asunto="consulta";
        $contacto->mensaje="hola buenas tardes";
        $contacto->estado=null;
        $contacto->save();

        $contacto=New Contacto();
        $contacto->nombre="otro cliente mas";
        $contacto->correo="alguien10@gmail.com";
        $contacto->asunto="consulta";
        $contacto->mensaje="hola cuando hacen black friday";
        $contacto->estado=null;
        $contacto->save();
        
        $contacto=New Contacto();
        $contacto->nombre="otro cliente menos";
        $contacto->correo="alguien11@gmail.com";
        $contacto->asunto="consulta";
        $contacto->mensaje="tienen otras sucursales";
        $contacto->estado=null;
        $contacto->save();

        $contacto=New Contacto();
        $contacto->nombre="otro cliente2";
        $contacto->correo="alguien12@gmail.com";
        $contacto->asunto="consulta";
        $contacto->mensaje="cuando una sucursal por el plam";
        $contacto->estado=null;
        $contacto->save();

        $contacto=New Contacto();
        $contacto->nombre="cliente";
        $contacto->correo="alguien13@gmail.com";
        $contacto->asunto="consulta";
        $contacto->mensaje="hacen envios a domicilio?";
        $contacto->estado=null;
        $contacto->save();

        $contacto=New Contacto();
        $contacto->nombre="clientecliente";
        $contacto->correo="alguien14@gmail.com";
        $contacto->asunto="consulta";
        $contacto->mensaje="tiene marca olympikus?";
        $contacto->estado=null;
        $contacto->save();

        $contacto=New Contacto();
        $contacto->nombre="Clientex2";
        $contacto->correo="alguien15@gmail.com";
        $contacto->asunto="consulta";
        $contacto->mensaje="tienen marca reebok?";
        $contacto->estado=null;
        $contacto->save();

        $contacto=New Contacto();
        $contacto->nombre="Un Cliente mas";
        $contacto->correo="alguien16@gmail.com";
        $contacto->asunto="consulta";
        $contacto->mensaje="su servicio de envio llega a la pampa??";
        $contacto->estado=null;
        $contacto->save();

        $contacto=New Contacto();
        $contacto->nombre="Un Cliente Menos";
        $contacto->correo="alguien17@gmail.com";
        $contacto->asunto="consulta";
        $contacto->mensaje="hola";
        $contacto->estado=null;
        $contacto->save();

        $contacto=New Contacto();
        $contacto->nombre="Cliente de clientes";
        $contacto->correo="alguien18@gmail.com";
        $contacto->asunto="consulta";
        $contacto->mensaje="hola solo venden zapatos deportivos??";
        $contacto->estado=null;
        $contacto->save();

        $contacto=New Contacto();
        $contacto->nombre="Sr X";
        $contacto->correo="alguien19@gmail.com";
        $contacto->asunto="consulta";
        $contacto->mensaje="Venden Vans??";
        $contacto->estado=null;
        $contacto->save();

    }
}
