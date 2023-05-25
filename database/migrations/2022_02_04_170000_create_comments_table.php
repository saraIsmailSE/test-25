<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->id();
<<<<<<< HEAD
            $table->longText('body')->nullable();
            $table->integer('user_id');
            $table->integer('post_id');
            $table->integer('comment_id')->default(0);
=======
            $table->longText('body');
            $table->integer('user_id');
            $table->integer('post_id');
            $table->integer('comment_id')->default(0);
            $table->integer('media_id');
>>>>>>> 77736819 (..)
            $table->string('type');
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
        Schema::dropIfExists('comments');
    }
}
