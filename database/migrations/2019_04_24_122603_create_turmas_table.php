<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTurmasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('turmas', function (Blueprint $table) {
            $table->bigIncrements('id');

            /* FALTA O FOREIGNKEY DO CURSO AINDA */

            $table->integer('status')->default(0);
            $table->decimal('alunos_inscritos', 4,0)->nullable();
            $table->decimal('media_turma', 4,2)->nullable();
            $table->decimal('nota_curso', 4,2)->nullable();
            $table->date('inicio_aulas')->nullable();

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
        Schema::dropIfExists('turmas');
    }
}
