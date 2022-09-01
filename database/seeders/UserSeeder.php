<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Hash;


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
            'name'=>'lolita',
            'email'=>'lolita@gmail.com',
            'password'=>bcrypt('1234'),
        ])->assignRole('admin');

        User::create([
            'name'=>'administrador',
            'email'=>'admin@gmail.com',
            'password'=>bcrypt('1234'),
        ])->assignRole('admin');

        User::create([
            'name'=>'carlos',
            'email'=>'carlos@gmail.com',
            'password'=>bcrypt('1234'),
        ])->assignRole('admin');

        User::create([
            'name'=>'duvan',
            'email'=>'duvan@gmail.com',
            'password'=>bcrypt('1234'),
        ])->assignRole('admin');
    }
}
