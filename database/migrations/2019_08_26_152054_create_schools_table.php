<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSchoolsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('schools', function (Blueprint $table) {
            $table->bigIncrements('id')->unsigned();
            $table->string('name');
            $table->string('email');
            $table->integer('students_population')->nullable();
            $table->integer('staff_population')->nullable();                  
            $table->tinyInteger('govt_approved')->default(false);          
            $table->string('website', 30)->nullable();
            $table->string('logo')->nullable();
            $table->string('phone', 15);
            $table->string('motto')->nullable();
            $table->text('address');
            $table->string('town', 50);
            $table->string('city', 50);
            $table->string('local_government');
            $table->string('state_id');
            $table->unsignedBigInteger('curriculum_id');
            $table->unsignedBigInteger('school_type_id');
            $table->integer('postal_code')->nullable();
            $table->unsignedBigInteger('country_id');
            $table->timestamps();

            $table->index([ 'country_id', 'curriculum_id', 'school_type_id']);
            $table->foreign('country_id')->references('id')->on('countries')
                  ->onDelete('cascade');
            $table->foreign('curriculum_id')->references('id')->on('curricula')
                  ->onDelete('cascade');
            $table->foreign('school_type_id')->references('id')->on('school_types')
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
        Schema::dropIfExists('schools');
    }
}
