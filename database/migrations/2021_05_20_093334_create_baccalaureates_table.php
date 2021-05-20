<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBaccalaureatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('baccalaureates', function (Blueprint $table) {
            $table->id();
            $table->integer('cert_num')->nullable();
            $table->date('cert_date');
            $table->foreignId('baccalaureate_code_id')->constrained();
            $table->string('cert_source', 45)->nullable();
            $table->tinyInteger('pass_cycle');
            $table->float('total_grade', 6, 4);
            $table->float('religion_grade', 6, 4)->nullable();
            $table->integer('foreign_cert_equi_num')->nullable();
            $table->date('foreign_cert_equi_date')->nullable();
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
        Schema::dropIfExists('baccalaureates');
    }
}
