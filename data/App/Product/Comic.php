<?php

  class Comic extends Product implements getInfo {
    public $pages;

    public function __construct($title = "title", $author = "author", $publisher = "publisher", $price = 0, $pages = 0) {
      parent::__construct($title, $author, $publisher, $price);

      $this->pages = $pages;
    }
    public function getFullLabel() {
      return "Comic : " . $this->getInfo() . " - {$this->pages} pages\n";
    }

    public function getInfo() {
      return "$this->title | {$this->getLabel()} (Rp$this->price)";
    }
  }
