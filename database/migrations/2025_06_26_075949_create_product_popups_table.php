<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductPopupsTable extends Migration
{
    public function up()
    {
        Schema::create('product_popups', function (Blueprint $table) {
            $table->id();
            $table->longText('popup_name');
            $table->timestamps();

            $table->unsignedBigInteger('product_id')->nullable();

            // Foreign key constraint (assumed relation with products table)
            $table->foreign('product_id')->references('id')->on('products')->onDelete('set null');
        });
    }

    public function down()
    {
        Schema::dropIfExists('product_popups');
    }
}
