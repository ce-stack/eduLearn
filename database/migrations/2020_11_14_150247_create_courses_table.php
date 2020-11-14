<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->string('name');
            if (env('DB_CONNECTION') === 'sqlite_testing') {
                $table->text('content')->default('0');
            } else {
                $table->text('content');
            }
            $table->string('reviews');
            $table->string('time');
            $table->string('secondName');
            $table->text('secondContent');
            $table->integer('price');
            $table->string('lesson');
            $table->integer('length');
            $table->string('level');
            $table->string('category');
            $table->integer('seats');
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
