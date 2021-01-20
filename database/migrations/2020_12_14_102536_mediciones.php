<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Medicion;

class Mediciones extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mediciones', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('estudio_id')->nullable();
            $table->string('estado', 100)->nullable();
            // $table->string('fecha_hora', 255)->nullable();
            $table->integer('intento')->default(1);
            $table->string('primer_manana_pad', 255)->nullable();
            $table->string('primer_manana_pas', 255)->nullable();
            $table->string('segundo_manana_pad', 255)->nullable();
            $table->string('segundo_manana_pas', 255)->nullable();
            $table->string('primer_noche_pad', 255)->nullable();
            $table->string('primer_noche_pas', 255)->nullable();
            $table->string('segundo_noche_pad', 255)->nullable();
            $table->string('segundo_noche_pas', 255)->nullable();
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
        Schema::dropIfExists('mediciones');
    }
}
