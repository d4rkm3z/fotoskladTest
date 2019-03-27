<?php

require 'vendor/autoload.php';

$app = new Shelter();
$cat = new \Animal\Cat('Kitty', 2);
echo get_class($cat);

$app->put($cat);
