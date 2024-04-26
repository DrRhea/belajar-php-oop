<?php

  require_once ('./data/Product.php');

  $Product1 = new Product("Naruto", "Masashi Kishimoto", "Shonen Jump", 35000, 100, 0, "Comic");
//  echo "Comic : " . $Product1->getLabel();
  echo $Product1->getFullLabel();

  $Product2 = new Product("Uncharted", "Neil Druckmann", "Sony Computer", 250000, 0, 50, "Game");
//  echo "Game : " . $Product2->getLabel();
  echo $Product2->getFullLabel();

//  $ProductInfo1 = new PrintProductInfo();
//  echo $ProductInfo1->printProduct($Product1);
//
//  $ProductInfo2 = new PrintProductInfo();
//  echo $ProductInfo2->printProduct($Product2);



