<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsuariosTable extends Migration
{
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table  ->id()
                    ->unique();
            $table->string('nombre');
            $table->string('apellido');
            $table->string('correo');
            $table  ->timestamp('email_verified_at')
                    ->nullable();
            $table->string('direccion');                    
            $table->foreignId('rols_id')
                    ->references('id')
                    ->on('rols')
                    ->onDelete('cascade');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('usuarios');
    }
}
