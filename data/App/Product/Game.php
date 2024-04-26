<?php

  class Game extends Product implements getInfo {
    public $hours;

    public function __construct($title = "title", $author = "author", $publisher = "publisher", $price = 0, $hours = 0) {
      parent::__construct($title, $author, $publisher, $price);

      $this->hours = $hours;
    }
    public function getFullLabel() {
      return "Game : " . $this->getInfo() . " ~ {$this->hours} hours\n";
    }

    public function getInfo() {
      return "$this->title | {$this->getLabel()} (Rp$this->price)";
    }
  }
