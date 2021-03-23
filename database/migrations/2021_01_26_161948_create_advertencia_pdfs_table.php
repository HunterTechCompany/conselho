<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdvertenciaPdfsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('advertencias_pdf', function (Blueprint $table) {
            $table->id();
            $table->string('matricula');
            $table->string('descricao', 100);
            $table->timestamps();

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
        Schema::dropIfExists('advertencia_pdfs');
    }
}
