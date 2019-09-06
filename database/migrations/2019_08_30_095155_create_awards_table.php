<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAwardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('awards', function (Blueprint $table) {
            $table->bigIncrements('id')->unsigned();
            $table->unsignedBigInteger('school_id');
            $table->string('awarded_by');
            $table->text('description');
            $table->string('total');
            $table->timestamps();

            $table->index('school_id');
            $table->foreign('school_id')->references('id')->on('schools')
                  ->onDelete('cascade');
        });

        Schema::create('reviews', function (Blueprint $table) {
            $table->bigIncrements('id')->unsigned();
            $table->unsignedBigInteger('school_id');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('rating_id');
            $table->text('comment')->nullable();
            $table->timestamps();

            $table->index(['school_id', 'user_id', 'rating_id']);
            $table->foreign('school_id')->references('id')->on('schools')
                ->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')
                ->onDelete('cascade');
            $table->foreign('rating_id')->references('id')->on('ratings')
                ->onDelete('cascade');
          
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('awards');
        Schema::dropIfExists('reviews');
    }
}
