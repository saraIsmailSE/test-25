<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePollVotesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('poll_votes', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->integer('post_id');
<<<<<<< HEAD
            $table->integer('poll_option_id');
=======
            $table->string('option');
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
        Schema::dropIfExists('poll_votes');
    }
<<<<<<< HEAD
}
=======
}
>>>>>>> 77736819 (..)
