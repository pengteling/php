<?php
	class Car
	{
	  var $color;
	  function Car($color="green") {
	    $this->color = $color;
	  }
	  function what_color() {
	    return $this->color;
	  }
	}	
	$car1 = new Car();
	$car1->Car("red");	
	echo $car1->color;
	require('./copyright.php');
	echo readfile("webdictionary.txt");
?>