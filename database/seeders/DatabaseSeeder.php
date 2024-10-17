<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

/*SEEDERS DatabaseSeeder POR DEFECTO 
    por convension seguir el siguiente formato...
    PHP ARTISAN MAKE:SEEDER NombreSeeder

    
    PARA ACTUALIZAR USAR: php artisan migrate:fresh --seed
*/

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        /*ES NECESARIO LLAMAR (CALL) A LAS OTRAS CLASES QUE ESTAN EN SEEDERS,
        COMO SI DatabaseSeeder FUERA LA CLASE PRINCIPAL*/
        $this->call(tallaSeeder::class);
        $this->call(MarcaSeeder::class);
        $this->call(DescuentoSeeder::class);
        $this->call(InventarioSeeder::class);
        $this->call(ProductoSeeder::class);
        $this->call(RolSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(NotaventaSeeder::class);
        $this->call(DetalleventaSeeder::class);

        $this->call(FacturaSeeder::class);
        $this->call(CarritoSeeder::class);
        $this->call(ContactoSeeder::class);
    }
}
