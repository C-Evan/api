<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfesionalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profesional', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre', 150);
            $table->string('apellido', 150);
            $table->integer('telefono');
            $table->string('email', 150);
            $table->string('pais', 100);
            $table->string('localidad', 150);
            $table->string('matricula', 50);
            $table->integer('n_matricula');
            $table->string('password', 255);
            $table->string('mercadopago', 150);
            $table->string('api_token', 255);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('profesional');
    }
}
