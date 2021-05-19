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
            $table->string('first_name', 45);
            $table->string('last_name', 45);
            $table->string('father_name', 45);
            $table->string('mother_name', 45);
            $table->string('father_job', 45)->nullable();
            $table->string('place_of_birth', 45)->nullable();
            $table->date('date_of_birth');
            $table->string('birth_governorate', 45);
            $table->string('civil_registery_place', 45)->nullable();
            $table->integer('civil_registery_num')->nullable();
            $table->string('civil_registery_governorate', 45);
            $table->tinyInteger('civil_registery_type')->nullable();
            $table->integer('national_num');
            $table->integer('id_card_num')->nullable();
            $table->string('enlistment_department', 45);
            $table->char('gender', 1);
            $table->string('current_residence_city', 45)->nullable();
            $table->string('current_residence_district', 45)->nullable();
            $table->string('permanent_residence_city', 45)->nullable();
            $table->string('permanent_residence_district', 45)->nullable();
            $table->integer('land_line_num')->nullable();
            $table->integer('mobile_num')->nullable();
            $table->string('image', 100)->nullable();
            $table->text('notes')->nullable();
            $table->foreignId('nationality_code_id')->constrained();
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
