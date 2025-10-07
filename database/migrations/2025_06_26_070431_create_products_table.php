<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->string('subtitle')->nullable();
            $table->decimal('price', 10, 2)->nullable();
            $table->longText('short_description')->nullable();
            $table->longText('description')->nullable();
            $table->string('image')->nullable();
            $table->boolean('is_active')->default(1);
            $table->timestamps();

            $table->unsignedBigInteger('category_id');

            $table->string('add_on_name')->nullable();
            $table->string('add_on_price')->nullable();
            $table->string('image2')->nullable();
            $table->longText('add_adbenafits_name')->nullable();
            $table->longText('add_adbenefit_description')->nullable();
            $table->longText('popup_name')->nullable();
            $table->string('product_type')->default('injection');

            // Foreign key constraint
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('products');
    }
}
