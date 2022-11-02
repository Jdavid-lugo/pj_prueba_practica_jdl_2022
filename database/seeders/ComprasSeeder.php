<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class ComprasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('compras')->insert([
            'id_producto' => 7,
            'id_user' => 3 ,
            
        ]);
        DB::table('compras')->insert([
            'id_producto' => 7,
            'id_user' => 4 ,
            
        ]);
        DB::table('compras')->insert([
            'id_producto' => 7,
            'id_user' => 5 ,
            
        ]);
        DB::table('compras')->insert([
            'id_producto' => 10,
            'id_user' => 6 ,
            
        ]);
        DB::table('compras')->insert([
            'id_producto' => 10,
            'id_user' => 7 ,
            
        ]);
        DB::table('compras')->insert([
            'id_producto' => 12,
            'id_user' => 8 ,
            
        ]);
    }
}
