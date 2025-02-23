<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAttendanceTable extends Migration
{
    public function up()
    {
        Schema::create('attendances', function (Blueprint $table) {
            $table->id();
            $table->foreignId('internal_user_id')->nullable()->constrained('internal_users')->onDelete('cascade');
            $table->foreignId('external_user_id')->nullable()->constrained('external_users')->onDelete('cascade');
            $table->dateTime('login_time');
            $table->dateTime('logout_time')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('attendances'); 
    }
}
