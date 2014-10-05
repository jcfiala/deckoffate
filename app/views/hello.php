<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>The Deck of Fate</title>
</head>
<body>
	<h1>Welcome to the Deck of Fate</h1>
	
	<p>Useful for games on the go, the Deck of Fate lets you draw cards representing rolls of four FUDGE dice.  To start drawing cards, <a href="/shuffle">Shuffle a Deck</a> to draw a card!</p>
	
	<?php if(!empty($card)): ?>
	<h2>You have drawn a card of value <span class="card-value"><?php print $card->value(); ?></span></h2>
	
	<div class="card"><?php print htmlentities($card); ?></div>
	<div class="draw"><a class="command" href="/">Draw another Card</a> <a class="command" href="/shuffle">Shuffle the Deck and Draw Again</a></div>
	<?php endif; ?>
	
	<p><a href="http://www.faterpg.com">FATE</a> is the action and adventure tabletop roleplaying game produced by <a href="http://www.evilhat.com">Evil Hat Productions</a>, based on <a href="http://www.fudgerpg.com">FUDGE</a>, the rules-light tabletop roleplaying game created by Steffan O'Sullivan.  Both use FUDGE dice, which are six sided dice with two sides showing - (for -1), two showing + (for +1) and two showing blank.  A draw from this deck represents rolling four of these dice.</p>
</body>
</html>
