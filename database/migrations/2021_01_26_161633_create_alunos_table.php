<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlunosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alunos', function (Blueprint $table) {
            $table->string('matricula')->unique();
            $table->unsignedBigInteger('id_turma');
            $table->string('nome', 100);
            $table->string('email', 200)->unique();
            $table->string('telefone', 20);
            $table->string('pai', 100)->nullable();
            $table->string('mae', 100)->nullable();
            $table->tinyInteger('status');
            $table->timestamps();

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
        Schema::dropIfExists('alunos');
    }
}
