<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFeeSchoolsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fee_schools', function (Blueprint $table) {
            $table->bigIncrements('id')->unsigned();
            $table->unsignedBigInteger('school_id');
            $table->unsignedBigInteger('fee_type_id');
            $table->string('amount');
            $table->string('grade', 15);
            $table->timestamps();

            $table->index(['school_id', 'fee_type_id']);
            $table->foreign('school_id')->references('id')->on('schools')
                  ->onDelete('cascade');
            $table->foreign('fee_type_id')->references('id')->on('fee_types')
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
        Schema::dropIfExists('fee_schools');
    }
}
