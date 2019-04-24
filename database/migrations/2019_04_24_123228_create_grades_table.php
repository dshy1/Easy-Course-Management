<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGradesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('grades', function (Blueprint $table) {
            $table->bigIncrements('id');
        /* indexar o foreign dos alunos e turma  */
            $table->decimal('media', 4,2)->nullable();
            $table->decimal('frequencia', 5,2)->nullable();
            $table->decimal('nota_curso', 4,2)->nullable();
            $table->longtext('obs_rate')->nullable();
            $table->integer('status_aluno')->default(1);
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
        Schema::dropIfExists('grades');
    }
}
