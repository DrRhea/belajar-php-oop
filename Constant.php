<?php
//  define('NAME', 'Rhea');
//  echo NAME;

//  const AGE = 18;
//  echo AGE;

  class Constant {
    const NAME = "Rhea";
  }
  echo constant::NAME . "\n";

//  Magic Constant
  echo __LINE__ . "\n";
  echo __FILE__ . "\n";
  echo __DIR__ . "\n";
  echo __TRAIT__ . "\n";
  echo __FUNCTION__ . "\n";
  echo __CLASS__ . "\n";
  echo __NAMESPACE__ . "\n";
  echo __METHOD__ . "\n";

