<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSTopicsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    
    public function up()
    { 
        Schema::table('s_topics', function (Blueprint $table) {
            $table->unsignedBigInteger('topicID');
        
            $table->foreign('topicID')->references('id')->on('topics');
        });

        Schema::create('s_topics', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('content');
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
        Schema::dropIfExists('s_topics');
    }
}
