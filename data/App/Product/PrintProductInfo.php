<?php

  class PrintProductInfo {
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
