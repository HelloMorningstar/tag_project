<?php

require __DIR__. '/functions.php';
$data = require 'data.php';


$price = 10000;
$Characteristics = findItemsCheaperThen($data, $price);
var_dump($Characteristics);


$itemId = 8;
$finder = find($data, $itemId);
var_dump($finder);