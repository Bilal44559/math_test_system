<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('therapy_slots', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('therapy_id');
            $table->string('day');
            $table->time('start_time');
            $table->time('end_time');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();

            $table->foreign('therapy_id')
                  ->references('id')->on('therapies')
                  ->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('therapy_slots');
    }
};
