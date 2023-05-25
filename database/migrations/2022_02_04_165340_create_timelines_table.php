<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTimelinesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('timelines', function (Blueprint $table) {
            $table->id();
<<<<<<< HEAD
            // type could be (main - news - book - profile - group)
            $table->integer('type_id');
=======
            $table->string('name');
            $table->string('description');
            // type could be (main - news - book - profile - group)
            $table->string('type');
>>>>>>> 77736819 (..)
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
        Schema::dropIfExists('timelines');
    }
}
