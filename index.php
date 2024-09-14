<?php

# Pull in Composer autoloading functionality
require 'vendor/autoload.php';

use App\SingleTon; # ⭐ SingleTon Design pattern
use App\LaptopFactory; # ⭐ Factory Design pattern

// called first time
$firsTime = SingleTon::generate();

// called second time
$secondTime = SingleTon::generate();




#For Factory pattern file 
require_once __DIR__ . '/src/Factory.php';

// Factory pattern
$lenovoLaptop = LaptopFactory::makeLaptop('Lenovo','Core i 7 8th generation');
echo $lenovoLaptop->getFactoryGoods();








