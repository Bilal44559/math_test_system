<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEnrollmentsTable extends Migration
{
    public function up()
    {
        Schema::create('enrollments', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->string('full_name')->nullable();
            $table->integer('age_years')->nullable();
            $table->unsignedTinyInteger('age_months')->nullable();
            $table->string('gender')->nullable();
            $table->string('grade')->nullable();
            $table->string('guardian_name')->nullable();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->string('postal_code', 6)->nullable();
            $table->text('address')->nullable();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('set null');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('enrollments');
    }
}
