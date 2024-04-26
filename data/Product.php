<?php

  class Product{
    public  $title = "title",
            $author = "author",
            $publisher = "publisher",
            $price = 0;

    public function getLabel() {
      return "$this->author, $this->publisher\n";
    }
  }