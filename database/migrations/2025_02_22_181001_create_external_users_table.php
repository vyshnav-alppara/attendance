<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExternalUsersTable extends Migration
{
    public function up()
    {
        Schema::create('external_users', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('internal_users')->onDelete('cascade'); // Foreign key to internal_users
            $table->string('phone_2');
            $table->string('address');
            $table->date('dob');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('external_users');
    }
}
