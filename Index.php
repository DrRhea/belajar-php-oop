<?php
  require_once('./data/App/init.php');

  use \App\Product\User as ProductUser;
  use \App\Service\User as ServiceUser;

  new ProductUser();
  new ServiceUser();
