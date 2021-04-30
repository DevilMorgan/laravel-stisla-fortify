<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Apdevice extends Migration{

public function up(){
    Schema::create('apdevice', function (Blueprint $table) {
        $table->id();
        $table->string('apname');
               $table->string('ipaddress');
               $table->string('username');
               $table->string('password');
               $table->string('apiport');
               $table->string('sshport');
        $table->timestamps();

        // Options: See More at https://laravel.com/docs/5.8/migrations#creating-columns
        // integer
        // bigInteger
        // binary
        // boolean
        // char
        // date
        // dateTime
        // decimal
        // double
        // enum('level', ['easy', 'hard']);
        // float
        // longText
    });
}

public function down(){
    Schema::dropIfExists('apdevice');
}

/**
 * Create by LeeNuksID :D
 *
 * Thanks For Using Laragen
 */
    }
