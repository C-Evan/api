<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Paciente extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pacientes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre', 150);
            $table->string('apellido', 150);
            $table->string('sexo', 30);
            $table->integer('telefono');
            $table->string('email', 150)->unique()->required();
            $table->string('fecha_nacimiento', 255);
            $table->string('pais', 255);
            $table->integer('localidad_id');
            $table->string('password', 255);
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
        Schema::dropIfExists('pacientes');
    }
}
