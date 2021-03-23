<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdvertenciasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('advertencias', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_tipo');
            $table->string('matricula');
            $table->string('solicitada', 100);
            $table->string('autor', 100);
            $table->text('observacao');
            $table->timestamps();

            $table->foreign('id_tipo')->references('id')->on('tipos_advertencia');
            $table->foreign('matricula')->references('matricula')->on('alunos')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('advertencias');
    }
}
