<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('sit_no');
            $table->string('student_name', 150);
            //$table->string('name')->length(150);
            $table->year('year');
            $table->string('student_status', 150);
            $table->string('student_institute', 150);
            $table->string('student_address', 255);
            $table->string('student_term', 20);
            $table->string('student_result', 20);
            $table->decimal('student_total', 4, 1);
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
        Schema::dropIfExists('students');
    }
}
