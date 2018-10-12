<?php


class Card
{
  public $suit;
  public $type; // 2-10, J, Q, K, A

  public function __construct($suit = null, $type = null) {
    $this->suit = $suit;
    $this->type = $type;
  }
}
