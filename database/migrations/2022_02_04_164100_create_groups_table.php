<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGroupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('groups', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('description')->nullable();
            // type could be (reading - leading - advising - supervising)
<<<<<<< HEAD
            $table->integer('type_id');
            $table->string('cover_picture')->nullable();
            $table->integer('creator_id');
            $table->integer('timeline_id');
            $table->boolean('is_active')->default(1);
=======
            $table->string('type');
            $table->string('cover_picture')->nullable();
            $table->integer('creator_id');
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
        Schema::dropIfExists('groups');
    }
}
