<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAccountDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('account_details', function (Blueprint $table) {

            $table->bigIncrements('id');

            $table->unsignedBigInteger('account_id');

            $table->unsignedInteger('slp');
            $table->unsignedInteger('claimable_slp');
            $table->unsignedInteger('different_slp');

            $table->unsignedInteger('rank');

            $table->foreign('account_id')
                ->references('id')
                ->on('accounts')->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('account_details');
    }
}
