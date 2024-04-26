<?php

  class Product{
    public  $title,
            $author,
            $publisher,
            $price,
            $pages,
            $hours,
            $type;

    public function __construct($title = "title", $author = "author", $publisher = "publisher", $price = 0, $pages = 0, $hours = 0, $type = "type"){
      $this->title = $title;
      $this->author = $author;
      $this->publisher = $publisher;
      $this->price = $price;
      $this->pages = $pages;
      $this->hours = $hours;
      $this->type = $type;
    }
    public function getLabel() {
      return "$this->author, $this->publisher";
    }

    public function getFullLabel() {
      $text = "{$this->type} : {$this->title} | {$this->getLabel()} (Rp{$this->price}) ";

      if($this->type == "Comic")
        $text .= "- {$this->pages} pages\n";
      else if($this->type == "Game")
        $text .= "~ {$this->hours} hours\n";

      return $text;
    }
  }

  class PrintProductInfo{
    public function printProduct(Product $product){
      return "{$product->title} | {$product->getLabel()} | {$product->price}\n";
    }
  }