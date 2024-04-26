<?php

  class Product{
    public  $title,
            $author,
            $publisher,
            $price,
            $pages,
            $hours;

    public function __construct($title = "title", $author = "author", $publisher = "publisher", $price = 0, $pages = 0, $hours = 0) {
      $this->title = $title;
      $this->author = $author;
      $this->publisher = $publisher;
      $this->price = $price;
      $this->pages = $pages;
      $this->hours = $hours;
    }
    public function getLabel() {
      return "$this->author, $this->publisher";
    }

    public function getFullLabel() {
      return "{$this->title} | {$this->getLabel()} (Rp{$this->price})";
    }
  }

  class Comic extends Product {
    public function getFullLabel() {
      return "Comic : {$this->title} | {$this->getLabel()} (Rp{$this->price}) - {$this->pages} pages\n";
    }
  }
  class Game extends Product {
    public function getFullLabel() {
      return "Game : {$this->title} | {$this->getLabel()} (Rp{$this->price}) ~ {$this->hours} hours\n";
    }
  }