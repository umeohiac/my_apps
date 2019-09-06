<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->bigIncrements('id')->unsigned();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('phone', 15);
            $table->boolean('admin')->default(false);
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });

        Schema::create('countries', function (Blueprint $table) {
            $table->bigIncrements('id')->unsigned();
            $table->string('name');
        });

        Schema::create('states', function (Blueprint $table) {
            $table->bigIncrements('id')->unsigned();
            $table->string('name');
        });

        Schema::create('curricula', function (Blueprint $table) {
            $table->bigIncrements('id')->unsigned();
            $table->string('name');
        });

        Schema::create('school_types', function (Blueprint $table) {
            $table->bigIncrements('id')->unsigned();
            $table->string('name');
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
        Schema::dropIfExists('countries');
        Schema::dropIfExists('states');
        Schema::dropIfExists('curriculums');
        Schema::dropIfExists('school_types');
    }
}
