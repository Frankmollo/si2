<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;


class RolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role1 = Role::create(['name'=> 'Administrador']);
        $role2 = Role::create(['name'=> 'Vendedor']);
        $role3 = Role::create(['name'=> 'Cliente']);

        Permission::create(['name' => 'Gestionar Usuario'])->syncRoles([$role1]);
        Permission::create(['name' => 'Gestionar Bitacora'])->syncRoles([$role1]);//syncRoles asigna a varios roles
        Permission::create(['name' => 'Gestionar Roles'])->syncRoles([$role1]);

        Permission::create(['name' => 'Gestionar NotaVenta'])->syncRoles([$role1]);
        Permission::create(['name' => 'Gestionar DetalleVenta'])->syncRoles([$role1]);
        Permission::create(['name' => 'Gestionar Reporte'])->syncRoles([$role1]);
        Permission::create(['name' => 'Gestionar Mensajes'])->syncRoles([$role1,$role2]);

        Permission::create(['name' => 'Gestionar Marcas'])->syncRoles([$role1,$role2]);
        Permission::create(['name' => 'Gestionar Productos'])->syncRoles([$role1,$role2]);
        Permission::create(['name' => 'Gestionar Inventario'])->syncRoles([$role1,$role2]);
        Permission::create(['name' => 'Gestionar Tallas'])->syncRoles([$role1,$role2]);
        Permission::create(['name' => 'Gestionar Descuento'])->syncRoles([$role1,$role2]);

        Permission::create(['name' => 'Gestionar Factura'])->syncRoles([$role1]);
        Permission::create(['name' => 'Panel'])->syncRoles([$role1,$role2]);
        Permission::create(['name' => 'Deseo'])->syncRoles([$role3]);
        // php artisan migrate:fresh --seed
    }
}
