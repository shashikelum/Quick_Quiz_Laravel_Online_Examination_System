<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOexStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('oex_students', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')-> nullable();
            $table->string('email')-> nullable();
            $table->string('mobile_no')-> nullable();
            $table->string('dob')-> nullable();
            $table->string('exam')-> nullable();
            $table->string('password')-> nullable();
            $table->string('status')-> nullable();
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
        Schema::dropIfExists('oex_students');
    }
}
