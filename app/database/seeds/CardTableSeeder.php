<?php

class CardTableSeeder extends Seeder {
  public function run()
  {
    DB::table('cards')->delete();
    
    $card_data = array(
      // -4
      array(
        "Horrifying Incompetence", "Comedy of Errors", array(-1, -1, -1, -1), array(NULL, 0, NULL),
      ),
      // -3
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
      // -2:
      array(
        "Are You Kidding Me", "Bumbling", array(-1, -1, +1, -1), array(-1, -1, 1),
      ),
      array(
        "Nasty Surprise", "Overpowered", array(-1, +1, -1, -1), array(-1, 1, 1),
      ),
      array(
        "Panicking", "Cruel Fate", array(1, -1, -1, -1), array(1, 1, 1),
      ),
      array(
        "Cornered", "Right in the Face", array(-1, -1, -1, 1), array(-1, -1, -1),
      ),
      array(
        "Bewildered", "Outmaneuvered", array(-1, 0, 0, -1), array(-1, null, -1),
      ),
      array(
        "Bad Timing", "Off Your Game", array(0, -1, 0, -1), array(-1, null, 1),
      ),
      array(
        "Fortune Laughs", "Broken", array(0, 0, -1, -1), array(1, null, 1),
      ),
      array(
        "Fooled You", "That Flopped", array(-1, -1, 0, 0), array(-1, null, -1),
      ),
      array(
        "Offended", "A Costly Error", array(-1, 0, -1, 0), array(-1, null, 1),
      ),
      array(
        "Exposed", "Discouraged", array(0, -1, -1, 0), array(1, null, 1),
      ),
      // -1
      array(
        "Clumsy", "Uninspired", array(0, 1, -1, -1), array(null, 1, null),
      ),
      array(
        "Slow", "Flimsy", array(1, 0, -1, -1), array(null, 1, null),
      ),
      array(
        "Thick-Witted", "Weaksauce", array(0, -1, 1, -1), array(null, 1, null),
      ),
      array(
        "Too Careful", "Careless", array(-1, 0, 1, -1), array(null, 1, null),
      ),
      array(
        "Unfriendly", "The Wrong Tools", array(1, -1, 0, -1), array(null, 1, null),
      ),
      array(
        "A Simple Mistake", "Out of Breath", array(-1, 1, 0, -1), array(null, 1, null),
      ),
      array(
        "Ill Met", "Faltering", array(0, -1, -1, 1), array(null, -1, null),
      ),
      array(
        "Overextended", "The Secret is Out", array(-1, 0, -1, 1), array(null, -1, null),
      ),
      array(
        "Treacherous Terrain", "Too Much To Handle", array(-1, -1, 0, 1), array(null, -1, null),
      ),
      array(
        "A Moment of Weakness", "No Clear Exit", array(1, -1, -1, 0), array(null, -1, null),
      ),
      array(
        "Low Morale", "Slippery", array(-1, 1, -1, 0), array(null, -1, null),
      ),
      array(
        "Unimpressed", "A Shadow Falls", array(-1, -1, 1, 0), array(null, -1, null),
      ),
      array(
        "Left in the Dark", "Stubborn Problem", array(0, 0, 0, -1), array(1, 1, 1),
      ),
      array(
        "Overcorrected", "Trick of the Light", array(-1, 0, 0, 0), array(-1, -1, -1),
      ),
      array(
        "Backsliding", "Took it on the Chin", array(0, -1, 0, 0), array(-1, -1, 1),
      ),
      array(
        "Overconfident", "Closed Off", array(0, -1, -1, 0), array(-1, 1, 1),
      ),
      // 0 values
      array(
        "Grounded", "Treading Water", array(0, 0, 1, -1), array(null, 1, null),
      ),
      array(
        "Clear Path", "No Obstacles", array(0, 1, 0, -1), array(null, 1, null),
      ),
      array(
        "By the Numbers", "First Steps", array(1, 0, 0, -1), array(null, 1, null),
      ),
      array(
        "Fair Play", "Neutral Discovery", array(0, 0, -1, 1), array(null, 1, null),
      ),
      array(
        "No Improvement", "Uncomplicated", array(0, -1, 0, 1), array(null, 1, null),
      ),
      array(
        "Made Up For It", "Status Quo", array(-1, 0, 0, 1), array(null, 1, null),
      ),
      array(
        "Spinning Wheels", "Opening Move", array(0, 1, -1, 0), array(null, -1, null),
      ),
      array(
        "Small Adjustments", "Testing the Waters", array(1, 0, -1, 0), array(null, -1, null),
      ),
      array(
        "Middle of the Road", "Feint and Counter", array(0, -1, 1, 0), array(null, -1, null),
      ),
      array(
        "Can't Do Much About It", "A Brief Pause", array(-1, 0, 1, 0), array(null, -1, null),
      ),
      array(
        "Textbook", "Keeping Up", array(1, -1, 0, 0), array(null, -1, null),
      ),
      array(
        "Meh", "Middle of the Road", array(-1, 1, 0, 0), array(null, -1, null),
      ),
      array(
        "Switched Positions", "Dead Heat", array(-1, 1, 1, -1), array(-1, null, -1),
      ),
      array(
        "Opposing Forces", "That Worked Out", array(1, -1, 1, -1), array(-1, null, 1),
      ),
      array(
        "High Tension", "Ebb & Flow", array(1, 1, -1, -1), array(1, null, 1),
      ),
      array(
        "Right on the Edge", "Dodged a Bullet", array(-1, -1, 1, 1,), array(-1, null, -1),
      ),
      array(
        "Could Be Better", "Could Be Worse", array(-1, 1, -1, 1), array(-1, null, 1),
      ),
      array(
        "Push and Pull", "Keeping an Eye on it", array(1, -1, -1, 1), array(1, null, 1),
      ),
      array(
        "All Things Balanced", "As Expected", array(0, 0, 0, 0), array(null, 0, null),
      ),
      // +1
      array(
        "Perceptive", "Position of Strength", array(0, 1, 1, -1), array(null, 1, null),
      ),
      array(
        "Smart", "Charged Up", array(1, 0, 1, -1), array(null, 1, null),
      ),
      array(
        "Well-Read", "They Were Slow", array(1, 1, 0, -1), array(null, 1, null),
      ),
      array(
        "Trick Up Your Sleeve", "Saw an Opening", array(-1, 0, 1, 1), array(null, -1, null),
      ),
      array(
        "Alliance Bears Fruit", "Solid Footing", array(1, -1, 0, 1), array(null, -1, null),
      ),
      array(
        "Fast on Your Feet", "Went with Your Gut", array(-1, 1, 0, 1), array(null, -1, null),
      ),
      array(
        "Insightful", "Passed the Advantage", array(0, 1, -1, 1), array(null, 1, null),
      ),
      array(
        "Well-Prepared", "Lucky Charm", array(1, 0, -1, 1), array(null, 1, null),
      ),
      array(
        "On Point", "Put Them Off Balance", array(0, -1, 1, 1), array(null, 1, null),
      ),
      array(
        "Didn't See You Coming", "Stumbled Into Success", array(1, 1, -1, 1), array(null, -1, null),
      ),
      array(
        "Small Blessings", "Aggresive Move", array(1, -1, 1, 0), array(null, -1, null),
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