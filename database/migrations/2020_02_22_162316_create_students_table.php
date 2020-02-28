<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{

   /* public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('Eid')->uniqid;
            $table->string('name');
            $table->string('dep');
            $table->string('phone')->uniqid;
            $table->string('email')->uniqid;
            $table->string('Pemail')->uniqid;
            $table->string('password');
            $table->timestamps();
             $table->integer('Advisor_id')->unsigned()->nullable();
            $table->foreign('Advisor_id')->references('id')->on('advisors');
      });
    }*/


    public function down()
    {
    }
}
