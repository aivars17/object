<?php

class ElectricCar extends Car {
	public $maxRange;
	public $effSpeed;
	public $chargingTime;

	public function charge(){
		echo "Charging....<br>";
	}
	//polymorphism
	public function go() {
		echo "This electric car is just flying over the road...<br>";
	}
}