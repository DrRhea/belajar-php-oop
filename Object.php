<?php

  require_once ('./data/Product.php');

  $Product1 = new Comic("Naruto", "Masashi Kishimoto", "Shonen Jump", 35000, 100, 0);
  echo $Product1->getFullLabel();

  $Product2 = new Game("Uncharted", "Neil Druckmann", "Sony Computer", 250000, 0, 50);
  echo $Product2->getFullLabel();



