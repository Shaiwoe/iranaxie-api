<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddCategoryIdToGameCardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('game_cards', function (Blueprint $table) {

            $table->unsignedBigInteger('category_id')->nullable()->after('icon_id');

            $table->foreign('category_id')
                ->references('id')
                ->on('categories')->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('game_cards', function (Blueprint $table) {

            $table->dropColumn('category_id');
        });
    }
}
