<?php

  class Statics {
      public static $number = 1;

      public static function sayHello() {
        return "Hello " . self::$number++ . " times.\n";
      }
  }

  echo Statics::sayHello();
  echo Statics::sayHello();
  echo Statics::sayHello();

  echo "\n";

  $statics = new Statics;
  echo $statics->sayHello();
  echo $statics->sayHello();
  echo $statics->sayHello();
