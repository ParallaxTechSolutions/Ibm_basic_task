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
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('gender',50)->nullable();
            $table->string('street')->nullable();
            $table->string('city',60)->nullable();
            $table->string('state',60)->nullable();
            $table->string('country',60)->nullable();
            $table->string('post_code',10)->nullable();
            $table->string('phone',20)->nullable();
            $table->text('image')->nullable();
            $table->tinyInteger('status')->nullable();
            $table->string('email')->nullable();
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
