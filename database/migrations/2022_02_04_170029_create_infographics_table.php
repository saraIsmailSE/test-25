<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInfographicsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('infographics', function (Blueprint $table) {
            $table->id();
            $table->string('title');
<<<<<<< HEAD
            $table->integer('designer_id');
            $table->integer('section_id');
=======
            $table->integer('media_id');
            $table->integer('designer_id');
            $table->string('section');
>>>>>>> 77736819 (..)
            $table->integer('series_id')->nullable();
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
        Schema::dropIfExists('infographics');
    }
}
