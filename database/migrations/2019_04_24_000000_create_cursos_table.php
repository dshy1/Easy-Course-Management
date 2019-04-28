<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCursosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cursos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome', 80);
            $table->decimal('duracao', 5,2);
            $table->longText('descricao')->nullable();
            $table->decimal('todos_inscritos', 5,0)->nullable();
            $table->decimal('alunos_concluiram', 5,0)->nullable();
            $table->decimal('alunos_desistiram', 5,0)->nullable();
            $table->decimal('media_turmas', 4,2)->nullable();
            $table->decimal('nota_curso', 4,2)->nullable();
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
        Schema::dropIfExists('cursos');
    }
}
