<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('sub_categories', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('title')->nullable();
            $table->unsignedBigInteger('category_id');
            $table->text('short_description')->nullable();
            $table->string('tagline')->nullable();
            $table->string('price')->default('0');
            $table->string('price_tagline')->nullable();
            $table->string('background_image')->nullable();
            $table->integer('order_bit')->default(0);
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();

            $table->foreign('category_id')
                  ->references('id')->on('categories')
                  ->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('sub_categories');
    }
};
