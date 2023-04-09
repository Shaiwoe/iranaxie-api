<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGameCardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('game_cards', function (Blueprint $table) {

            $table->bigIncrements('id');

            $table->unsignedBigInteger('icon_id');

            $table->string('name');

            $table->integer('attack')->nullable();
            $table->integer('defence')->nullable();
            $table->integer('health')->nullable();

            $table->integer('energy');

            $table->string('description');

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
        Schema::dropIfExists('game_cards');
    }
}
