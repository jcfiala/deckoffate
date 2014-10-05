<?php

class Deck {
  protected $cards = array();
  protected $position = 0;
  
  /**
   * Loads the deck with cards.
   */
  public static function load($id = 0) {
    $deck = new Deck;
    $cards = Card::where('deckId', '=', $id)->get();
    $this->cards = array();
    foreach ($cards as &$card) {
      $this->cards[] = $card;
    }
    return $deck;
  }
  
  /**
   * Shuffles the cards, and sets the position of the deck at the top.
   */
  public function shuffle() {
    shuffle($this->cards);
    $this->position = 0;
  }
  
  /**
   * Draws a card, returning the card and moving the position.
   */
  public function draw() {
    if ($this->position >= count($this->cards)) {
      $this->shuffle();
    }
    $card =& $this->cards[$this->position];
    $this->position++;
    return $card;
  }
  
  /**
   * Peeks at the top card, returning the card but not changing the position.
   */
  public function peek() {
    if ($this->position >= count($this->cards)) {
      $this->shuffle();
    }
    $card =& $this->cards[$this->position];
    return $card;
  }
}
