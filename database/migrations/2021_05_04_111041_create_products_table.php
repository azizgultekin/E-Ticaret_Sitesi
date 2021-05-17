<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->string('title',150);
            $table->string('keywords')->nullable();
            $table->string('description')->nullable();
            $table->string('image')->nullable();
            $table->string('category_id')->nullable();
            $table->string('user_id')->nullable();
            $table->float('price')->nullable();
            $table->string('quantity')->default(1);
            $table->string('minquantity')->default(5);
            $table->string('tax')->default(18);
            $table->string('detail')->nullable();
            $table->string('slug',100)->nullable();
            $table->string('status',5)->nullable()->default('False');
            $table->timestamps();//created_ad, updated_at auto
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
