<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExchangesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exchanges', function (Blueprint $table) {

            $table->bigIncrements('id');

            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('coin_id');
            $table->unsignedBigInteger('card_id');
            $table->unsignedBigInteger('wallet_id');

            $table->string('type');

            $table->unsignedDecimal('amount', 30, 10);

            $table->unsignedBigInteger('price');

            $table->string('wallet_track')->nullable();
            $table->string('payment_track')->nullable();

            $table->string('status');

            $table->dateTime('createdAt')->useCurrent();

            $table->foreign('user_id')
                ->references('id')
                ->on('users')->cascadeOnDelete();

            $table->foreign('coin_id')
                ->references('id')
                ->on('coins')->cascadeOnDelete();

            $table->foreign('card_id')
                ->references('id')
                ->on('cards')->cascadeOnDelete();

            $table->foreign('wallet_id')
                ->references('id')
                ->on('wallets')->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('exchanges');
    }
}
