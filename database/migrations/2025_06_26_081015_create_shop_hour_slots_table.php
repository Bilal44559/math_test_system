<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('shop_hour_slots', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('shop_hour_id');
            $table->string('day');
            $table->time('start_time');
            $table->time('end_time');
            $table->integer('call_to_book')->default(0);
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();

            $table->foreign('shop_hour_id')
                  ->references('id')->on('shop_hours')
                  ->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('shop_hour_slots');
    }
};
