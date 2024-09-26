<?php

# Pull in Composer autoloading functionality
require 'vendor/autoload.php';

#For Factory pattern file 
require_once __DIR__ . '/src/Factory.php';

#For Strategy patterns
require_once __DIR__ . '/src/Stratigy.php';



use App\SingleTon; # ⭐ SingleTon Design pattern
use App\LaptopFactory; # ⭐ Factory Design pattern


use App\Playprocess; # ⭐ Stratigy Design pattern
use App\Football; 
use App\Cricket;
#end

// called first time
$firsTime = SingleTon::generate();

// called second time
$secondTime = SingleTon::generate();




// Factory pattern
$lenovoLaptop = LaptopFactory::makeLaptop('Lenovo','Core i 7 8th generation');
echo $lenovoLaptop->getFactoryGoods();




// Stratigy pattern
$str = "Messi";
$play = new Playprocess($str);
echo $play->processing(new Football);


$str = "Tamim";
$play = new Playprocess($str);
echo $play->processing(new Cricket);









