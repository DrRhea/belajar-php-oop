<?php

  require_once ('./data/Product.php');

  $Product1 = new Product();
  $Product1->title = "Naruto";
  $Product1->author = "Masashi Kishimoto";
  $Product1->publisher = "Shonen Jump";
  $Product1->price = 35000;
  echo "Comic : " . $Product1->getLabel();

  $Product2 = new Product();
  $Product2->title = "Uncharted";
  $Product2->author = "Neil Druckmann";
  $Product2->publisher = "Sony Computer";
  $Product2->price = 250000;
  echo "Game : " . $Product2->getLabel();
