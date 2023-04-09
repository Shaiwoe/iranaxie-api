<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoinsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('coins', function (Blueprint $table) {

            $table->bigIncrements('id');

            $table->unsignedBigInteger('icon_id');

            $table->string('name');
            $table->string('class');
            $table->string('symbol');

            $table->unsignedBigInteger('buy_price');
            $table->unsignedBigInteger('sell_price');

            $table->foreign('icon_id')
                ->references('id')
                ->on('icons')->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('coins');
    }
}
