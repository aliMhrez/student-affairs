<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentStatusesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_statuses', function (Blueprint $table) {
            $table->id();
            $table->foreignId('student_id')->constrained();
            $table->integer('decision_num')->nullable();
            $table->date('year');
            $table->foreignId('status_code_id')->constrained();
            $table->foreignId('education_year_code_id')->constrained();
            $table->text('notes')->nullable();
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
        Schema::dropIfExists('student_statuses');
    }
}
