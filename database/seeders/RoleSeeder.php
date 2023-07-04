<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $adminRole = Role::create(['name' => 'Admin']);
        $adminSale = Role::create(['name' => 'Saler']);
        $clientRole = Role::create(['name' => 'Client']);

        // Permission::create(['name' => 'admin.dashboard'])->assignRole($adminRole); // this way only can assign one role to one permission per execution
        // Permission::create(['name' => 'admin.dashboard'])->syncRoles([$adminRole, $clientRole]); // this way can assign same permission to many roles

        Permission::create(['name' => 'admin.dashboard.index'])->assignRole($adminRole); // this way can assign same permission to many roles
        Permission::create(['name' => 'admin.products.index'])->assignRole($adminRole);
        Permission::create(['name' => 'admin.categories.index'])->assignRole($adminRole);
        Permission::create(['name' => 'admin.orders.index'])->assignRole($adminRole);
        Permission::create(['name' => 'admin.sales.index'])->syncRoles([$adminRole,$adminSale]);

        //Contact permission
        Permission::create(['name' => 'admin.contact.index'])->assignRole($adminRole);
        Permission::create(['name' => 'admin.contact.get'])->assignRole($adminRole);

    }
}
