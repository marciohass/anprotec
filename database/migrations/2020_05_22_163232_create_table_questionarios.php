<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableQuestionarios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('questionarios', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->boolean('Q1')->default('0');
            $table->string('Q2', 20);
            $table->string('Q3', 10);
            $table->string('Q4', 100);
            $table->string('Q5', 50);
            $table->boolean('Q6')->default('0');
            $table->string('Q6_desc', 100);
            $table->boolean('Q7')->default('0');
            $table->boolean('Q8')->default('0');
            $table->decimal('Q9_desc01', 8,2);
            $table->decimal('Q9_desc02', 8,2);
            $table->decimal('Q9_desc03', 8,2);
            $table->string('Q10', 100);
            $table->boolean('Q11')->default('0');
            $table->enum('Q12', ['S', 'N', 'TP']);
            $table->enum('Q13', ['S', 'N', 'SI']);
            $table->string('Q14', 20);
            $table->boolean('Q15')->default('0');
            $table->string('Q16', 15);
            $table->boolean('Q17')->default('0');
            $table->enum('Q18', ['S', 'N', 'A']);
            $table->boolean('Q19')->default('0');
            $table->string('Q20', 100);
            $table->string('Q21', 10);
            $table->string('Q22', 20);
            $table->enum('Q23', ['S', 'N']);
            $table->boolean('Q24')->deafult('0');
            $table->string('Q25', 50);
            $table->string('Q26', 255);
            $table->boolean('Q27')->default('0');
            $table->bigInteger('inscrito_id')->unsigned();
            $table->foreign('inscrito_id')->references('id')->on('inscritos');
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
        Schema::dropIfExists('table_questionarios');
    }
}
