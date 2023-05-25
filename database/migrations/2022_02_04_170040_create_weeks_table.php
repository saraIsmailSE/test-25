<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWeeksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('weeks', function (Blueprint $table) {
            $table->id();
<<<<<<< HEAD
            // $table->date('date');
            $table->string('title');
            $table->integer('is_vacation')->nullable();
            $table->timestamp('main_timer')->nullable();
            $table->timestamp('audit_timer')->nullable();
            $table->timestamp('modify_timer')->nullable();
=======
            $table->date('date');
            $table->string('section');
            $table->integer('is_vacation')->nullable();
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
        Schema::dropIfExists('weeks');
    }
<<<<<<< HEAD
}
=======
}
>>>>>>> 77736819 (..)
