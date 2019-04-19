<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {  
        
        Schema::create('questions', function (Blueprint $table) {
            $table->increments('id');
            $table->longText('question')->charset('utf8');
            $table->string('ans1')->charset('utf8');
            $table->string('ans2')->charset('utf8');
            $table->string('ans3')->charset('utf8');
            $table->string('ans4')->charset('utf8');
            $table->string('typeQues')->charset('utf8');
            $table->Integer('level');
            $table->string('correctAns')->charset('utf8');
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
        
        Schema::dropIfExists('questions');
    }
}
