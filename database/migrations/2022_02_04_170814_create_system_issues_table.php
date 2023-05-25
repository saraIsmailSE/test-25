<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSystemIssuesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('system_issues', function (Blueprint $table) {
            $table->id();
            $table->integer('reporter_id');
<<<<<<< HEAD
            $table->integer('reviewer_id')->nullable();
            $table->text('reporter_description');
            $table->string('reviewer_note')->nullable();
=======
            $table->integer('reviewer_id');
            $table->text('reporter_description');
            $table->string('reviewer_note');
>>>>>>> 77736819 (..)
            $table->date('solved')->nullable();
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
        Schema::dropIfExists('system_issues');
    }
}
