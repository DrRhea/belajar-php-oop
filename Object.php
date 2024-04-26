<?php

  require_once ('./data/Product.php');

  $Product1 = new Comic("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000, 100);
  echo $Product1->getFullLabel();

  $Product2 = new Game("Uncharted", "Neil Druckmann", "Sony Computer", 250000, 50);
  echo $Product2->getFullLabel();

  echo "\n";

  $Product2->setTitle("Spiderman");
  echo $Product2->getTitle();

