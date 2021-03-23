<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBoletimsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('boletins', function (Blueprint $table) {
            $table->id();
            $table->string('matricula');
            $table->unsignedBigInteger('id_disciplina');
            $table->unsignedBigInteger('id_bimestre');
            $table->unsignedBigInteger('id_turma');
            $table->integer('aulas_ministradas');
            $table->integer('faltas');
            $table->integer('nota');
            $table->timestamps();

            $table->foreign('matricula')->references('matricula')->on('alunos')->onDelete('CASCADE')->onUpdate('CASCADE');
            $table->foreign('id_disciplina')->references('id')->on('disciplinas')->onDelete('CASCADE');
            $table->foreign('id_bimestre')->references('id')->on('bimestres');
            $table->foreign('id_turma')->references('id')->on('turmas')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('boletims');
    }
}
