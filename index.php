<?php

require_once __DIR__ . './vendor/autoload.php';

use Tymoshchuk\WeblabLib\creditinterest\simpleinterest;
use Tymoshchuk\WeblabLib\creditinterest\сompoundinterest;

$simple = new simpleinterest();
$compound = new сompoundinterest();

try {
   echo 'Simple :' . $simple->indebtedness(24000,10, 4);
   echo "\nCompound :" . $compound->indebtedness(67000,2, 10);
}catch (\Tymoshchuk\WeblabLib\excepcions\custexcept $exp){
    echo $exp;
}