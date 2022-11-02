<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableFacturas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('facturas', function (Blueprint $table) {
            $table->bigInteger('id', true);
            $table->unsignedBigInteger('id_compra');
            $table->timestamp('created_at')->useCurrent();
            $table->softDeletes();
            //$table->foreign('id_compra', 'compra_id_fkey')->references('id')->on('compras')->onUpdate('RESTRICT')->onDelete('RESTRICT');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('facturas', function (Blueprint $table) {
            //
        });
    }
}
