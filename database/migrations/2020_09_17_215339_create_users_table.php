<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->string('full_name');
            $table->string('gender');
            $table->string('email')->unique();
            $table->string('phone_no');
            $table->date('dob');
            $table->string('photo_name');
            $table->dateTime('join_date');
            $table->dateTime('termination_date')->nullable();
            $table->string('next_of_kin');
            $table->string('next_of_kin_phn');
            $table->string('next_of_kin_email');
            $table->string('rela_next_of_kin');
            $table->string('emergency_phn');
            $table->string('emergency_email');
            $table->string('emergency_name');
            $table->string('emergency_rela');
            $table->string('employment_type');
            $table->string('active_tag')->default('true');
            $table->string('not_terminated')->default('true');
            $table->string('role');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password')->nullable();
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
        Schema::dropIfExists('users');
    }
}
