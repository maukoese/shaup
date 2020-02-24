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
            $table->bigIncrements('id');
            $table->integer('user_id')->unsigned()->index();
            $table->integer('shop_id')->unsigned()->index()->nullable();
            $table->string('avatar')->default('https://api.adorable.io/avatars/285/');
            $table->json('categories');
            $table->float('amount');
            $table->float('sale')->nullable();
            $table->integer('stock');
            $table->integer('minimum')->default(1);
            $table->text('summary');
            $table->text('details');
            $table->json('rating')->nullable();
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
        Schema::dropIfExists('products');
    }
}
