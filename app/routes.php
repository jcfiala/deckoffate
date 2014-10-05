<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	$card = null;
	if (Session::has('deck')) {
		$deck = Session::get('deck');
		$card = $deck->draw();
	}
	return View::make('hello', array('card' => $card));
});

Route::get('shuffle', function()
{
	// Create a deck.
	if (Session::has('deck'))
	{
		$deck = Session::get('deck');
	}
	else {
		$deck = Deck::load();
	}
	$deck->shuffle();
	Session::put('deck', $deck);
	return Redirect::to('/');
});
