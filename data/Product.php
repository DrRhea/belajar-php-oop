<?php

  class Product{
    public  $title,
            $author,
            $publisher,
            $price;

    public function __construct($title = "title", $author = "author", $publisher = "publisher", $price = 0) {
      $this->title = $title;
      $this->author = $author;
      $this->publisher = $publisher;
      $this->price = $price;
    }
    public function getLabel() {
      return "$this->author, $this->publisher";
    }

    public function getFullLabel() {
      return "$this->title | {$this->getLabel()} (Rp$this->price)";
    }
  }

  class Comic extends Product {
    public $pages;

    public function __construct($title = "title", $author = "author", $publisher = "publisher", $price = 0, $pages = 0) {
      parent::__construct($title, $author, $publisher, $price);

      $this->pages = $pages;
    }
    public function getFullLabel() {
      return "Comic : " . parent::getFullLabel() . " - {$this->pages} pages\n";
    }
  }
  class Game extends Product {
    public $hours;

    public function __construct($title = "title", $author = "author", $publisher = "publisher", $price = 0, $hours = 0) {
      parent::__construct($title, $author, $publisher, $price);

      $this->hours = $hours;
    }
    public function getFullLabel() {
      return "Game : " . parent::getFullLabel() . " ~ {$this->hours} hours\n";
    }
  }