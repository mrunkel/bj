<?php

class Deck
{
   public $cards = [];

   private $cardValues = [
     '2', '3', '4',
     '5', '6', '7',
     '8', '9', '10',
     'J', 'Q', 'K',
     'A',
   ];

   private $cardSuits = [
     'C', 'D', 'H', 'S',
   ];

   function __construct($shuffle = true) {
      $this->reset();
      if ($shuffle) {
        $this->shuffle();
      }
  }

   private function reset() {
    foreach ($this->cardSuits as $suit) {
      foreach ($this->cardValues as $value) {
        $this->cards[] = new Card($suit, $value);
      }
    }
  }

  public function getCard() {
    return array_pop($this->cards);
  }

  public function shuffle() {
    shuffle($this->cards);
  }

}
