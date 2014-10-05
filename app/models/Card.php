<?php

class Card extends Eloquent {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'cards';
        
        protected $direction = 0;

        public function value() {
          return $this->die1 + $this->die2 + $this->die3 + $this->die4;
        }
        
        public function spin() {
          $this->direction = rand(0, 1);
        }
        
        public function __toString()
        {
          return $this->value() . ":" . $this->getTitle() . ':' . $this->getSymbol(1) . $this->getSymbol(2) . $this->getSymbol(3);
        }
        
        public function getTitle() {
          if (empty($this->title2) || empty($this->direction)) {
            return $this->title;
          }
          return $this->title2;
        }
        
        public function getSymbol($i) {
          if ($i > 3 || $i < 1) {
            return '';
          }
          switch ($i) {
            case 1:
              $val = $this->symbol1;
              break;
            case 2:
              $val = $this->symbol2;
              break;
            case 3:
              $val = $this->symbol3;
              break;
          }
          switch ($val) {
            case -1:
              return "<Moon>";
            case 0:
              return "<Eclipse>";
            case 1:
              return "<Sun>";
            default:
              return "      ";
          }
        }

}