<?php
$start = microtime();

require 'vendor/autoload.php';


$whoops = new \Whoops\Run;
$whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
$whoops->register();




$petro_automobilis = new Car(4,2,950,3.6);

$jono_automobilis = new ElectricCar(6,5,2000,5.7);


var_dump($petro_automobilis);
var_dump($jono_automobilis);

$jono_automobilis->charge();
$jono_automobilis->go();
$petro_automobilis->go();
// $petro_automobilis->doorCount = 8;
// echo $petro_automobilis->getWheels();
	
// echo $petro_automobilis->wheelCount;
// echo $petro_automobilis;
//var_dump($petro_automobilis);
// //by default
// echo $petro_automobilis->doorCount."<br>";
// //change parameter
// $petro_automobilis->doorCount = 8;
// //new value
// echo $petro_automobilis->doorCount."<br>";
// //veiksmai
// $petro_automobilis->go();
// $petro_automobilis->stop();
// $petro_automobilis->getWeight();

echo "<div style='position:absolute; right:0; top:0; background-color: red; color:white'>";
echo round((microtime() - $start)*1000)."ms";
echo " & ". round(memory_get_peak_usage()/(1024*1024), 2)." MB";
echo "</div>";