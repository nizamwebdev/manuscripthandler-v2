<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMhSmsCoverlettersTable extends Migration
{
    public function up()
    {
        Schema::create('mh_sms_coverletters', function (Blueprint $table) {

            $table->id();
            $table->integer('userID');
            $table->integer('manuscriptID');
            $table->string('fileName');
            $table->datetime('entryDate');
            $table->string('orderNumber');

           // $table->foreign('userID')->references('id')->on('mh_esubmit_profiles')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('mh_sms_coverletters');
    }
}
