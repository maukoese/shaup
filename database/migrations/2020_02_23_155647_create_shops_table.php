<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShopsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shops', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('avatar')->default('https://api.adorable.io/avatars/285/');
            $table->string('email')->unique()->nullable();
            $table->string('phone')->unique()->nullable();
            $table->text('details')->nullable();
            $table->json('payments')->default(json_encode(['mpesa' => ['shortcode' => '123456']]));
            $table->boolean('verified')->default(0);
            $table->timestamp('verified_at')->nullable();
            $table->json('location')->nullable();
            $table->integer('user_id')->nullable();
            $table->string('slug');
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
        Schema::dropIfExists('shops');
    }
}
