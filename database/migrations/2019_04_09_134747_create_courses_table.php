<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('courseTitle');
            $table->string('courseShortDescription');
            $table->longText('courseDescription');
            $table->string('courseLanguage')->default('ar');
            $table->integer('category_id');
            $table->char('courseIsFreeCourse')->default('0');
            $table->string('coursePrice')->default('0');
            $table->string('courseHasDiscount');
            $table->string('courseDiscountAmount')->nullable();
            $table->string('courseLevel');
            $table->integer('user_id');
            $table->string('courseThumbnail')->nullable();
            //$table->string('courseOverview');
            $table->string('courseStatus');
            $table->char('courseHasAccesscode')->nullable();
            // more to be here
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
        Schema::dropIfExists('courses');
    }
}
