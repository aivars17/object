<pre>
<?php

spl_autoload_register(function ($class_name) {
    include 'classes/' . $class_name . '.php';
});





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