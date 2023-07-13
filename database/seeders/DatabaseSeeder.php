<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RoleSeeder::class);
        $this->call(UserSeeder::class);

        \App\Models\Contact::factory(1000)->create();
        \App\Models\Branch::factory(10)->create();
         \App\Models\Category::factory(10)->create();
         \App\Models\SubCategory::factory(20)->create();


    }
}
