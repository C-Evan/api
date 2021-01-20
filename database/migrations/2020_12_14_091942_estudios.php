<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Estudios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estudios', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('paciente_id')->nullable();
            $table->integer('profesional_id')->nullable();
            $table->integer('pago_id')->nullable();
            $table->string('estado', 255)->nullable();
            $table->integer('inicio_am');
            $table->integer('fin_am');
            $table->integer('inicio_pm');
            $table->integer('fin_pm');
            $table->string('equipo_validado', 255)->nullable();
            $table->string('modelo_equipo', 255)->nullable();
            $table->string('tratamiento', 255)->nullable();
            $table->string('primera_consulta_pas', 255)->nullable();
            $table->string('primera_consulta_pad', 255)->nullable();
            $table->string('segunda_consulta_pas', 255)->nullable();
            $table->string('segunda_consulta_pad', 255)->nullable();
            $table->string('mapa_pad', 255)->nullable();
            $table->string('mapa_pas', 255)->nullable();
            $table->string('mapa_diurno_pad', 255)->nullable();
            $table->string('mapa_diurno_pas', 255)->nullable();
            $table->string('mapa_noche_pad', 255)->nullable();
            $table->string('mapa_noche_pas', 255)->nullable();
            $table->text('observaciones')->nullable();
            $table->string('resultado_mdpa', 255)->nullable();
            $table->string('resultado_mapa', 255)->nullable();
            $table->string('resultado_mapa_fenotipo', 255)->nullable();
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
        Schema::dropIfExists('estudios');
    }
}
