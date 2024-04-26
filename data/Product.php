<?php

  class Product{
    public  $title,
            $author,
            $publisher,
            $price;

    public function __construct($title = "title", $author = "author", $publisher = "publisher", $price = 0){
      $this->title = $title;
      $this->author = $author;
      $this->publisher = $publisher;
      $this->price = $price;
    }
    public function getLabel() {
      return "$this->author, $this->publisher";
    }
  }

  class PrintProductInfo{
    public function printProduct(Product $product){
      return "{$product->title} | {$product->getLabel()} | {$product->price}\n";
    }
  }