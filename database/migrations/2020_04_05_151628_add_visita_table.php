<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddVisitaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('visita', function (Blueprint $table) {
            $table->id()->unique();
            $table->time('fecha');
            $table->string('codigo');
            $table->integer('usuarios_id')->unsigned(); 
            $table->integer('pacientes_id')->unsigned();
            $table->integer('medicos_id')->unsigned();
            $table->integer('valorConsulta');

            //$table->foreing('usuarios_id')->references('id')->on('usuarios')->ondelete('cascade');
            //$table->foreing('pacientes_id')->references('id')->on('pacientes')->ondelete('cascade');
            //$table->foreign('medicos_id')->references('id')->on('medicos')->nodelete('cascade');

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
        Schema::dropIfExists('visita');
    }
}
