<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegistrationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registrations', function (Blueprint $table) {
            $table->increments('id');
            $table->string('creator');
            $table->string('nid');
            $table->string('dob');
            $table->string('name');
            $table->string('fathername');
            $table->string('mothername');

            $table->string('email')->unique();
            $table->string('occupation');
            //$table->string('permanetaddress');
            $table->string('presentaddress');

            $table->string('brta');
            $table->string('learnerlicence');
            $table->string('vehiclenumber');
            $table->string('applicationtype');
            $table->string('instructornbr');
            $table->string('classofvehicle');
            $table->string('renewaldate');
            $table->string('expiredate');

            $table->string('rtcCode');

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
        Schema::dropIfExists('registrations');
    }
}
