<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLessonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lessons', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('lessonTitle');
            $table->string('lessonDuration')->nullable();
            $table->integer('course_id');
            $table->integer('section_id');
            $table->string('lessonType');
            $table->string('lessonVideoLink')->nullable();
            $table->longText('lessonContent')->nullable();
            $table->longText('lessonSummary')->nullable();
            $table->string('lessonAttachment')->nullable();
            $table->string('lessonAttachmentType')->nullable();
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
        Schema::dropIfExists('lessons');
    }
}
