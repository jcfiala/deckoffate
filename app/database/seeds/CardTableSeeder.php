<?php

class CardTableSeeder extends Seeder {
  public function run()
  {
    DB::table('cards')->delete();
    
    $card_data = array(
      array(
        "Horrifying Incompetence", "Comedy of Errors", array(-1, -1, -1, -1), array(NULL, 0, NULL),
      ),
      array(
        "Bad Omen", "Slow-Motion Disaster", array(-1, -1, 0, -1), array(-1, -1, 1),
      ),
      array(
        "Just Plain Cursed", "Fumbled It", array(-1, 0, -1, -1), array(-1, 1, 1),
      ),
      array(
        "No Way Out", "Worst Day", array(0, -1, -1, -1), array(1, 1, 1),
      ),
      array(
        "Betrayed", "Major Snafu", array(-1, -1, -1, 0), array(-1, -1, -1),
      ),
      
    );
    foreach($card_data as $card) {
      Card::create(array('title' => $card[0], 'title2' => $card[1],
        'deckId' => 0,
        'die1' => $card[2][0],
        'die2' => $card[2][1],
        'die3' => $card[2][2],
        'die4' => $card[2][3],
        'symbol1' => $card[3][0],
        'symbol2' => $card[3][1],
        'symbol3' => $card[3][2],
      ));
    }
  }
}