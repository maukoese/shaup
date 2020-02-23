<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentsTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('user_id')->unsigned()->index()->nullable();
            $table->integer('client_id')->unsigned()->index()->nullable();
            $table->integer('package_id')->unsigned()->index()->nullable();
            $table->float('amount');
            $table->float('paid');
            $table->string('type')->default('Subscription');
            $table->string('request');
            $table->string('reference');
            $table->json('notes')->default(json_encode(['Awaiting Payment']));
            $table->string('status')->default('pending');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('payments');
    }
}
