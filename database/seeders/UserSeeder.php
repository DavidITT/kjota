<?php

namespace Database\Seeders;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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

        User::create([
            'name' => 'David',
            'lastname' => 'Villeda',
            'phone' => '7291198415',
            'email' => 'dortegav@gmail.com',
            'email_verified_at' => Carbon::now(),
            'password' => bcrypt('123456789')
        ])->assignRole('Admin');

        User::create([
            'name' => 'Daniela',
            'lastname' => 'Avila',
            'phone' => '7291198415',
            'email' => 'dani@gmail.com',
            'email_verified_at' => Carbon::now(),
            'password' => bcrypt('123456789')
        ])->assignRole('Client');

        User::create([
            'name' => 'Rodrigo',
            'lastname' => 'Avila',
            'phone' => '7291198415',
            'email' => 'rodrigo@gmail.com',
            'email_verified_at' => Carbon::now(),
            'password' => bcrypt('123456789')
        ])->assignRole('Saler');

        User::factory(30)->create();
    }
}
