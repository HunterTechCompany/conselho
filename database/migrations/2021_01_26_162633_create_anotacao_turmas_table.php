<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnotacaoTurmasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('anotacoes_turma', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_turma');
            $table->text('obervacao');
            $table->text('descricao');
            $table->date('data');
            $table->timestamps();

            $table->foreign('id_turma')->references('id')->on('turmas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('anotacao_turmas');
    }
}
