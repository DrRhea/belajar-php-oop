<?php

  require_once ('./data/Product.php');

  $Product1 = new Product("Naruto", "Masashi Kishimoto", "Shonen Jump", 35000);
//  echo "Comic : " . $Product1->getLabel();

  $Product2 = new Product("Uncharted", "Neil Druckmann", "Sony Computer", 250000);
//  echo "Game : " . $Product2->getLabel();

  $ProductInfo1 = new PrintProductInfo();
  echo $ProductInfo1->printProduct($Product1);

  $ProductInfo2 = new PrintProductInfo();
  echo $ProductInfo2->printProduct($Product2);

