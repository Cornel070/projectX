<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStaffsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('staffs', function (Blueprint $table) {
            $table->string('id');
            $table->string('full_name');
            $table->string('email')->unique();
            $table->string('phone_no');
            $table->date('date_of_birth');
            $table->string('photo_name');
            $table->dateTime('join_date');
            $table->dateTime('termination_date');
            $table->string('next_of_kin');
            $table->string('emergency_no');
            $table->string('employment_type');
            $table->string('active_tag')->default('true');
            $table->string('not_terminated')->default('true');
            $table->string('role');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
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
        Schema::dropIfExists('staffs');
    }
}
