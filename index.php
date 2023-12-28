<?php

spl_autoload_register(function($class) {
    $formattedClass = str_replace("\\", "/", $class);
    $path = "{$formattedClass}.php";
    require_once $path;
});

use App\Helper;

$helper = new Helper('Mariya');
print_r($helper->getName());