<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFateTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
          Schema::create('cards', function(Blueprint $table)
          {
            $table->increments('id');
            $table->integer('deckId');
            $table->string('title');
            $table->string('title2')->nullable()->default(NULL);
            $table->tinyInteger('die1')->default(0);
            $table->tinyInteger('die2')->default(0);
            $table->tinyInteger('die3')->default(0);
            $table->tinyInteger('die4')->default(0);
            $table->tinyInteger('symbol1')->nullable();
            $table->tinyInteger('symbol2')->nullable();
            $table->tinyInteger('symbol3')->nullable();
            $table->timestamps();
            $table->index('deckId', 'cards_idx_deckId');
            $table->index('title', 'cards_idx_title');
          });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
          Schema::table('cards', function(Blueprint $table)
          {
            $table->dropIndex('cards_idx_deckId');
            $table->dropIndex('cards_idx_title');
          });
          Schema::drop('cards');
	}

}
