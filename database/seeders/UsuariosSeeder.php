<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsuariosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'maria',
            'email' =>  'maria@prueba.com',
            'password' => bcrypt('laravel')
        ]);
        DB::table('users')->insert([
            'name' => 'juana',
            'email' =>  'juana@prueba.com',
            'password' => bcrypt('laravel')
        ]);
        DB::table('users')->insert([
            'name' => 'pedro',
            'email' =>  'pedro@prueba.com',
            'password' => bcrypt('laravel')
        ]);
        DB::table('users')->insert([
            'name' => 'juan',
            'email' =>  'juan@prueba.com',
            'password' => bcrypt('laravel')
        ]);
        DB::table('users')->insert([
            'name' => 'jose',
            'email' =>  'jose@prueba.com',
            'password' => bcrypt('laravel')
        ]);
        DB::table('users')->insert([
            'name' => 'carlos',
            'email' =>  'carlos@prueba.com',
            'password' => bcrypt('laravel')
        ]);
        DB::table('users')->insert([
            'name' => 'gabriel',
            'email' =>  'gariel@prueba.com',
            'password' => bcrypt('laravel')
        ]);
    }
}
