<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWalletsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wallets', function (Blueprint $table) {

            $table->bigIncrements('id');

            $table->unsignedBigInteger('user_id')->nullable();

            $table->unsignedBigInteger('network_id');

            $table->string('name');
            $table->string('address');

            $table->foreign('user_id')
                ->references('id')
                ->on('users')->cascadeOnDelete();

            $table->foreign('network_id')
                ->references('id')
                ->on('networks')->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('wallets');
    }
}
