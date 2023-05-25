<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('gender');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->boolean('is_blocked')->default(0);
            $table->boolean('is_hold')->default(0);
            $table->boolean('is_excluded')->default(0);
<<<<<<< HEAD
            $table->integer('request_id')->nullable();
            $table->bigInteger("parent_id")->nullable()->unsigned()->index();
            $table->foreign("parent_id")->references("id")->on("users");

=======
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
        Schema::dropIfExists('users');
    }
}
