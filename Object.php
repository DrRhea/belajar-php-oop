<?php

  require_once('./data/App/init.php');

  $Product1 = new Comic("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000, 100);
  $Product2 = new Game("Uncharted", "Neil Druckmann", "Sony Computer", 250000, 50);

  $printProduct = new printProductInfo();
  $printProduct->addProduct($Product1);
  $printProduct->addProduct($Product2);
  echo $printProduct->printProduct();




