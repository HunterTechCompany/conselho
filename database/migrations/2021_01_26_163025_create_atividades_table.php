<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAtividadesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('atividades', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_disciplina');
            $table->unsignedBigInteger('id_solicitacao');
            $table->string('professor', 100);
            $table->date('data');
            $table->enum('tipo', ['prova', 'trabalho']);
            $table->enum('situacao', ['aberto', 'deferido', 'indeferido']);
            $table->timestamps();

            $table->foreign('id_disciplina')->references('id')->on('disciplinas')->onDelete('CASCADE');
            $table->foreign('id_solicitacao')->references('id')->on('solicitacoes')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('atividades');
    }
}
