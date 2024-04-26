<?php
  interface getInfo {
    public function getFullLabel();
  }

  abstract class Product{
    protected $title,
              $author,
              $publisher,
              $price,
              $discount = 0;

    public function __construct($title = "title", $author = "author", $publisher = "publisher", $price = 0) {
      $this->title = $title;
      $this->author = $author;
      $this->publisher = $publisher;
      $this->price = $price;
    }

    public function setTitle($title) {
      $this->title = $title;
    }

    public function getTitle() {
      return $this->title;
    }

    public function setAuthor($author) {
      $this->author = $author;
    }

    public function getAuthor() {
      return $this->author;
    }

    public function setPublisher($publisher) {
      $this->publisher = $publisher;
    }

    public function getPublisher() {
      return $this->publisher;
    }

    public function setDiscount($discount) {
      $this->discount = $discount;
    }

    public function setPrice($price) {
      $this->price = $price;
    }

    public function getPrice() {
      return $this->price - ($this->price * $this->discount) / 100;
    }
    public function getLabel() {
      return "$this->author, $this->publisher";
    }

    abstract public function getInfo();
  }

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

  class printProductInfo {
    public $listProduct = [];
    public static $count = 1;

    public function addProduct(Product $product) {
      return $this->listProduct[] = $product;
    }

    public function printProduct() {
      $text = "LIST OF PRODUCTS :\n";

      foreach($this->listProduct as $product) {
        $text .= self::$count++ . ". " . $product->getFullLabel();
      }

      return $text;
    }
  }