<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableCompras extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('compras', function (Blueprint $table) {
            $table->bigInteger('id', true);
            $table->timestamp('created_at')->useCurrent();
            $table->unsignedBigInteger('id_producto');
            $table->unsignedBigInteger('id_user');
            //$table->foreign('id_producto', 'producto_compra')->references('id')->on('productos')->onUpdate('RESTRICT')->onDelete('RESTRICT');
            //$table->foreign('id_user', 'user_compra')->references('id')->on('users')->onUpdate('RESTRICT')->onDelete('RESTRICT');
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('compras', function (Blueprint $table) {
            //
        });
    }
}
