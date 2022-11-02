<?php


namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class ProductosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('productos')->insert([
            'porcentaje' => 5,
            'precio' =>  4,
        ]);
        DB::table('productos')->insert([
            'porcentaje' => 6,
            'precio' =>  3,
        ]);
        DB::table('productos')->insert([
            'porcentaje' => 7,
            'precio' =>  2,
        ]);
        DB::table('productos')->insert([
            'porcentaje' => 8,
            'precio' =>  1,
        ]);
        DB::table('productos')->insert([
            'porcentaje' => 9,
            'precio' =>  9,
        ]);
        DB::table('productos')->insert([
            'porcentaje' => 10,
            'precio' =>  8,
        ]);

    }
}
