<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('carts', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->integer('user_id')->nullable();
            $table->integer('product_id')->nullable();
            $table->unsignedBigInteger('therapy_id')->nullable();
            $table->integer('price');
            $table->string('slot_time')->nullable();
            $table->date('date')->nullable();

            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();

            $table->integer('shop_hour_slot_id')->nullable();
            $table->string('broswer_id')->nullable();

            $table->foreign('therapy_id')
                  ->references('id')
                  ->on('therapies')
                  ->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('carts');
    }
};
