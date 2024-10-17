<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->name = 'Homero Tompson';
        $user->foto = 'https://firebasestorage.googleapis.com/v0/b/imagenes-972f4.appspot.com/o/Productos%2Fjose-vaisman-e1529942487664.jpg?alt=media&token=2f18f78a-2838-4fa4-a3f6-a0a24fa2e2cb';
        $user->genero = 'Masculino';
        $user->contacto = '713000878';
        $user->direccion = 'Av. Lujan, C/9';
        $user->email = 'administrador@gmail.com';
        $user->password = bcrypt('123456789');
        $user->save();
        $user->assignRole('Administrador');

        $user = new User();
        $user->name = 'Nicol Simpson';
        $user->foto = 'https://firebasestorage.googleapis.com/v0/b/imagenes-972f4.appspot.com/o/Productos%2Fnicol.jfif?alt=media&token=94a642c6-4f53-48b1-b34e-11061fa7b959';
        $user->genero = 'Femenino';
        $user->contacto = '767109522';
        $user->direccion = 'Guapuru 2';
        $user->email = 'nicole2025@gmail.com';
        $user->password = bcrypt('somosuno78947560');
        $user->save();
        $user->assignRole('Vendedor');

        $user = new User();
        $user->name = 'Petter Sanchez';
        $user->foto = 'https://firebasestorage.googleapis.com/v0/b/imagenes-972f4.appspot.com/o/Productos%2Fpetter.jpg?alt=media&token=ce09acbf-eb02-4156-8eb7-880d8bce7b0c';
        $user->genero = 'Masculino';
        $user->contacto = '693541085';
        $user->direccion = 'Av. Internacional';
        $user->email = 'petter3@gmail.com';
        $user->password = bcrypt('soytupadre7');
        $user->save();
        $user->assignRole('Cliente');
        ////////////////
        $user = new User();
        $user->name = 'Mario Balcazar';
        $user->foto = 'https://firebasestorage.googleapis.com/v0/b/imagenes-972f4.appspot.com/o/Productos%2Fmario.jfif?alt=media&token=64b28054-6da1-43d8-9abf-5af22bc24f46';
        $user->genero = 'Masculino';
        $user->contacto = '693541085';
        $user->direccion = 'Av. Pirai';
        $user->email = 'balcazar323@gmail.com';
        $user->password = bcrypt('soytupadre7');
        $user->save();
        $user->assignRole('Vendedor');

        $user = new User();
        $user->name = 'Diego Lopez';
        $user->foto = 'https://firebasestorage.googleapis.com/v0/b/imagenes-972f4.appspot.com/o/Productos%2Fdiegolope.jpg?alt=media&token=1cea8418-908b-4be2-8b20-641682f1db0c';
        $user->genero = 'Masculino';
        $user->contacto = '693541085';
        $user->direccion = 'Av. Internacional';
        $user->email = 'admin@gmail.com';
        $user->password = bcrypt('12345678');
        $user->save();
        $user->assignRole('Administrador');

        $user = new User();
        $user->name = 'Juan Perez';
        $user->foto = 'https://firebasestorage.googleapis.com/v0/b/imagenes-972f4.appspot.com/o/Productos%2Fjuanperes.jpg?alt=media&token=aa6efb4e-cc42-4efb-8474-cf6a1abda6d1';
        $user->genero = 'Masculino';
        $user->contacto = '693541085';
        $user->direccion = 'Av. Alemana, 3er anillo';
        $user->email = 'juanitoperez@gmail.com';
        $user->password = bcrypt('soytupadre7');
        $user->save();
        $user->assignRole('Vendedor');

        $user = new User();
        $user->name = 'Laura Cuevas';
        $user->foto = 'https://firebasestorage.googleapis.com/v0/b/imagenes-972f4.appspot.com/o/Productos%2Flauracuevas.jpg?alt=media&token=a3bca7e4-62e2-4ea3-bd11-1ea0e72e2ff2';
        $user->genero = 'Femenino';
        $user->contacto = '693891085';
        $user->direccion = 'Av. plan 40000';
        $user->email = 'laurita4ever@gmail.com';
        $user->password = bcrypt('soytupadre7');
        $user->save();
        $user->assignRole('Cliente');

        $user = new User();
        $user->name = 'Martin Garcia';
        $user->foto = 'https://firebasestorage.googleapis.com/v0/b/imagenes-972f4.appspot.com/o/Productos%2Fmartingarcia.jpg?alt=media&token=b9ac6715-2d01-470e-a74f-6e5ac1b612d3';
        $user->genero = 'Maculino';
        $user->contacto = '791541035';
        $user->direccion = 'Av. plan 80000';
        $user->email = 'martingogo222@gmail.com';
        $user->password = bcrypt('soyyo3000');
        $user->save();
        $user->assignRole('Cliente');

        $user = new User();
        $user->name = 'Kamila Vargas';
        $user->foto = 'https://firebasestorage.googleapis.com/v0/b/imagenes-972f4.appspot.com/o/Productos%2Fkamilavargas.jpg?alt=media&token=8e6f8f7e-6421-4a81-954a-93cfd66f0962';
        $user->genero = 'Femenino';
        $user->contacto = '76413296';
        $user->direccion = 'Av. Vermejos';
        $user->email = 'kamilavag3434@gmail.com';
        $user->password = bcrypt('kamila3000');
        $user->save();
        $user->assignRole('Vendedor');

        $user = new User();
        $user->name = 'Lorenzo Tercero';
        $user->foto = 'https://firebasestorage.googleapis.com/v0/b/imagenes-972f4.appspot.com/o/Productos%2Florenzotercero.jfif?alt=media&token=68286149-5c8c-45a4-b796-7463824fbf2f';
        $user->genero = 'Masculino';
        $user->contacto = '65894232';
        $user->direccion = 'Av. Siempre libre';
        $user->email = 'lorenzo00@gmail.com';
        $user->password = bcrypt('ajasisoyyo23');
        $user->save();
        $user->assignRole('Cliente');

        $user = new User();
        $user->name = 'Humberto Canva';
        $user->foto = 'https://firebasestorage.googleapis.com/v0/b/imagenes-972f4.appspot.com/o/Productos%2Fhumberto.jpg?alt=media&token=9916f8ea-8235-425f-98fb-983806ac1121';
        $user->genero = 'Masculino';
        $user->contacto = '78963451';
        $user->direccion = 'Av. Galones';
        $user->email = 'humbertooso80@gmail.com';
        $user->password = bcrypt('osopolar333');
        $user->save();
        $user->assignRole('Cliente');

        $user = new User();
        $user->name = 'Fernanda Gomez';
        $user->foto = 'https://firebasestorage.googleapis.com/v0/b/imagenes-972f4.appspot.com/o/Productos%2Ffernanda.jpg?alt=media&token=0863cc19-02c5-4887-b243-33d2dcb364ce';
        $user->genero = 'Femenino';
        $user->contacto = '65858748';
        $user->direccion = 'Av. caballeros';
        $user->email = 'fernandita666@gmail.com';
        $user->password = bcrypt('estrellitasazules123');
        $user->save();
        $user->assignRole('Vendedor');

        $user = new User();
        $user->name = 'Lauv Herrera';
        $user->foto = 'https://firebasestorage.googleapis.com/v0/b/imagenes-972f4.appspot.com/o/Productos%2Flauv.jpg?alt=media&token=bf027073-8ba6-4798-97fd-918c5aff9dff';
        $user->genero = 'Masculino';
        $user->contacto = '75234875';
        $user->direccion = 'Av. Esperanza';
        $user->email = 'lalauv777@gmail.com';
        $user->password = bcrypt('soytunene77');
        $user->save();
        $user->assignRole('Administrador');

        $user = new User();
        $user->name = 'Harry Style';
        $user->foto = 'https://firebasestorage.googleapis.com/v0/b/imagenes-972f4.appspot.com/o/Productos%2Fharrysti.jfif?alt=media&token=1e9c3ba8-b657-4cf8-b8ab-2d60dbe808e8';
        $user->genero = 'Masculino';
        $user->contacto = '695285082';
        $user->direccion = 'Av. plan 40';
        $user->email = 'Harryuwu55@gmail.com';
        $user->password = bcrypt('soytuharry89');
        $user->save();
        $user->assignRole('Cliente');

        $user = new User();
        $user->name = 'Lorenzo Alma';
        $user->foto = 'https://firebasestorage.googleapis.com/v0/b/imagenes-972f4.appspot.com/o/Productos%2Florenzoalma.jpg?alt=media&token=4c710308-e36c-4a3c-aa4e-6ce154e502ba';
        $user->genero = 'Masculino';
        $user->contacto = '693541995';
        $user->direccion = 'Av. plan 12';
        $user->email = 'lorenzo999@gmail.com';
        $user->password = bcrypt('soy7y8y9ok');
        $user->save();
        $user->assignRole('Cliente');

        $user = new User();
        $user->name = 'Mariana Parada';
        $user->foto = 'https://firebasestorage.googleapis.com/v0/b/imagenes-972f4.appspot.com/o/Productos%2Fmarianaaparda.jpeg?alt=media&token=e7b5aff8-1321-4a7d-a62c-7f1a74be9664';
        $user->genero = 'Femenino';
        $user->contacto = '783541085';
        $user->direccion = 'Av. plamar';
        $user->email = 'marianaosa66@gmail.com';
        $user->password = bcrypt('soytupapa99');
        $user->save();
        $user->assignRole('Cliente');

        $user = new User();
        $user->name = 'Anabel Arteaga';
        $user->foto = 'https://firebasestorage.googleapis.com/v0/b/imagenes-972f4.appspot.com/o/Productos%2Fanabel.jpg?alt=media&token=fbb8f9a2-7dc0-47ac-a200-0e1bc3e5bfa2';
        $user->genero = 'Femenino';
        $user->contacto = '74112589';
        $user->direccion = 'Av. Rondas';
        $user->email = 'anabanana3@gmail.com';
        $user->password = bcrypt('pizza898989');
        $user->save();
        $user->assignRole('Vendedor');

        $user = new User();
        $user->name = 'Heremias Lopez';
        $user->foto = 'https://firebasestorage.googleapis.com/v0/b/imagenes-972f4.appspot.com/o/Productos%2Fgeremiaslo0pez.jpg?alt=media&token=880fd676-c66f-4339-8636-183272782c35';
        $user->genero = 'Masculino';
        $user->contacto = '697541075';
        $user->direccion = 'Av. plan 40000';
        $user->email = 'lopez4545@gmail.com';
        $user->password = bcrypt('elpepe34');
        $user->save();
        $user->assignRole('Cliente');

        $user = new User();
        $user->name = 'Pablo Tardio';
        $user->foto = 'https://firebasestorage.googleapis.com/v0/b/imagenes-972f4.appspot.com/o/Productos%2Fpablotardio.jpg?alt=media&token=388e4da9-a014-422a-b9b8-aaf177158350';
        $user->genero = 'Masculino';
        $user->contacto = '693545555';
        $user->direccion = 'Av. San Martin';
        $user->email = 'pablookok5@gmail.com';
        $user->password = bcrypt('tiburoncafe5');
        $user->save();
        $user->assignRole('Cliente');

        $user = new User();
        $user->name = 'Emilio Cortez';
        $user->foto = 'https://firebasestorage.googleapis.com/v0/b/imagenes-972f4.appspot.com/o/Productos%2Feemiliocrtez.jfif?alt=media&token=a3d08b58-0a80-4b11-8e75-d1c123cf47b6';
        $user->genero = 'Masculino';
        $user->contacto = '677545555';
        $user->direccion = 'Av. San Lucas';
        $user->email = 'emiliosiempre44@gmail.com';
        $user->password = bcrypt('uvasconmani55');
        $user->save();
        $user->assignRole('Cliente');

        $user = new User();
        $user->name = 'Irana Gutierrez';
        $user->foto = 'https://firebasestorage.googleapis.com/v0/b/imagenes-972f4.appspot.com/o/Productos%2Firana.jpg?alt=media&token=b718e313-4f1a-4e38-b3d9-aca4d30e58e4';
        $user->genero = 'Femenino';
        $user->contacto = '78648219';
        $user->direccion = 'Av. Homero';
        $user->email = 'iranagutierrez75@gmail.com';
        $user->password = bcrypt('iranacontra797');
        $user->save();
        $user->assignRole('Vendedor');

        $user = new User();
        $user->name = 'Roberto Lara';
        $user->foto = 'https://firebasestorage.googleapis.com/v0/b/imagenes-972f4.appspot.com/o/Productos%2Frobe5rttokara.jfif?alt=media&token=98a710ee-99ef-403e-9c93-a62c95c0e478';
        $user->genero = 'Masculino';
        $user->contacto = '61528655';
        $user->direccion = 'Av. Libertadores';
        $user->email = 'robertolara@gmail.com';
        $user->password = bcrypt('piegrandeexiste0');
        $user->save();
        $user->assignRole('Cliente');

        $user = new User();
        $user->name = 'Carol Quiroga';
        $user->foto = 'https://firebasestorage.googleapis.com/v0/b/imagenes-972f4.appspot.com/o/Productos%2Fcarolq.jpg?alt=media&token=bc887a8c-732e-432e-82ca-140f0be3d258';
        $user->genero = 'Femenino';
        $user->contacto = '69111155';
        $user->direccion = 'Av. San Lorenzo';
        $user->email = 'carolqui9090@gmail.com';
        $user->password = bcrypt('carolcarol99');
        $user->save();
        $user->assignRole('Cliente');

        $user = new User();
        $user->name = 'Paulet carasco';
        $user->foto = 'https://firebasestorage.googleapis.com/v0/b/imagenes-972f4.appspot.com/o/Productos%2Fpaulet.jfif?alt=media&token=2fd2dad8-1c3e-40ff-b00b-d0684ba2c915';
        $user->genero = 'femenino';
        $user->contacto = '793545355';
        $user->direccion = 'Av. Anibal';
        $user->email = 'paulete895@gmail.com';
        $user->password = bcrypt('casita5000');
        $user->save();
        $user->assignRole('Cliente');

        $user = new User();
        $user->name = 'Trevor salazar';
        $user->foto = 'https://firebasestorage.googleapis.com/v0/b/imagenes-972f4.appspot.com/o/Productos%2Ftrevot.jpg?alt=media&token=6ad58dec-75a6-4dc8-b9ff-d42aee7b3dea';
        $user->genero = 'Masculino';
        $user->contacto = '78963258';
        $user->direccion = 'Av. Antofagasta';
        $user->email = 'trevorsalsa101@gmail.com';
        $user->password = bcrypt('trevorkiki55');
        $user->save();
        $user->assignRole('Cliente');

        $user = new User();
        $user->name = 'Antonio Segundo';
        $user->foto = 'https://firebasestorage.googleapis.com/v0/b/imagenes-972f4.appspot.com/o/Productos%2Fantonio.jfif?alt=media&token=6082b084-9f14-4066-8b70-8a34413bbfa3';
        $user->genero = 'Masculino';
        $user->contacto = '69636963';
        $user->direccion = 'Av. San Martin';
        $user->email = 'antonioseg97@gmail.com';
        $user->password = bcrypt('antoni6969');
        $user->save();
        $user->assignRole('Cliente');

        $user = new User();
        $user->name = 'Natalia Jimenez';
        $user->foto = 'https://firebasestorage.googleapis.com/v0/b/imagenes-972f4.appspot.com/o/Productos%2Fnataliaji.jpg?alt=media&token=7b6c27a6-a005-43f0-8687-c33d72f96fda';
        $user->genero = 'Femenino';
        $user->contacto = '696745555';
        $user->direccion = 'Av. San Martin';
        $user->email = 'nati7000@gmail.com';
        $user->password = bcrypt('cafe5000');
        $user->save();
        $user->assignRole('Cliente');

        $user = new User();
        $user->name = 'Dylan torrez';
        $user->foto = 'https://firebasestorage.googleapis.com/v0/b/imagenes-972f4.appspot.com/o/Productos%2Fdylan.jfif?alt=media&token=c6efb0a0-87ff-4289-8d9a-8e70e91e6d9b';
        $user->genero = 'Masculino';
        $user->contacto = '693115555';
        $user->direccion = 'Av. cuatro ojos';
        $user->email = 'dylanok5090@gmail.com';
        $user->password = bcrypt('dylanpapa888');
        $user->save();
        $user->assignRole('Cliente');

        $user = new User();
        $user->name = 'Bruno Mendez';
        $user->foto = 'https://firebasestorage.googleapis.com/v0/b/imagenes-972f4.appspot.com/o/Productos%2Fbrunomendez.jpg?alt=media&token=b3f3b728-f750-4415-9975-76cf44961499';
        $user->genero = 'Masculino';
        $user->contacto = '793545595';
        $user->direccion = 'Av. San Martin';
        $user->email = 'brunosuper23@gmail.com';
        $user->password = bcrypt('teconpan45');
        $user->save();
        $user->assignRole('Cliente');

        $user = new User();
        $user->name = 'Jorge Dominguez';
        $user->foto = 'https://firebasestorage.googleapis.com/v0/b/imagenes-972f4.appspot.com/o/Productos%2Fjorgedominges.jpg?alt=media&token=ef9a5a3b-4adb-4379-8ea3-a33438c2a803';
        $user->genero = 'Masculino';
        $user->contacto = '666145555';
        $user->direccion = 'Av. Toronto';
        $user->email = 'jorgesdominguez4@gmail.com';
        $user->password = bcrypt('alfafor5151');
        $user->save();
        $user->assignRole('Cliente');

        $user = new User();
        $user->name = 'Julio Moreno';
        $user->foto = 'https://firebasestorage.googleapis.com/v0/b/imagenes-972f4.appspot.com/o/Productos%2Fjuliomoreno.webp?alt=media&token=faf311ee-3a90-4cb6-8477-13e4c9f9b909';
        $user->genero = 'Masculino';
        $user->contacto = '666141111';
        $user->direccion = 'Av. Toronto';
        $user->email = 'julio898989@gmail.com';
        $user->password = bcrypt('forfai5151');
        $user->save();
        $user->assignRole('Cliente');

        $user = new User();
        $user->name = 'Kaice Gomez';
        $user->foto = 'https://firebasestorage.googleapis.com/v0/b/imagenes-972f4.appspot.com/o/Productos%2Fkaice.jpg?alt=media&token=a4dc9474-ebe6-4dce-afca-af6dc3bbfa3f';
        $user->genero = 'Femenino';
        $user->contacto = '776145515';
        $user->direccion = 'Av. Toronto';
        $user->email = 'cliente@gmail.com';
        $user->password = bcrypt('123456789');
        $user->save();
        $user->assignRole('Cliente');
    }
}
