<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('_popular_courses', function (Blueprint $table) {
            $table->increments('Popular_id');
            $table->string('course_name');
            $table->string('course_image');
            $table->integer('course_rate');
            $table->integer('course_vote');
            $table->string('course_by');
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
        Schema::dropIfExists('_popular_courses');
    }
};
