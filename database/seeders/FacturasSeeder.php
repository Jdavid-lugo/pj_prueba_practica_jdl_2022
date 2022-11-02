<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FacturasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('facturas')->insert([
            'id_compra' => 1,
        ]);
        DB::table('facturas')->insert([
            'id_compra' =>2,
        ]);
        DB::table('facturas')->insert([
            'id_compra' => 3,
        ]);
        DB::table('facturas')->insert([
            'id_compra' => 4,
        ]);
        DB::table('facturas')->insert([
            'id_compra' => 5,
        ]);

    }
}
