<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSchUniformsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sch_uniforms', function (Blueprint $table) {
            $table->bigIncrements('id')->unsigned(); 
            $table->unsignedBigInteger('school_id');
            $table->string('photo');
            $table->string('color');
            $table->text('description')->nullable();        
            $table->timestamps();

            $table->index('school_id');
            $table->foreign('school_id')->references('id')->on('schools')
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
        Schema::dropIfExists('sch_uniforms');
    }
}
