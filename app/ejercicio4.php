<?php

echo "Ejercicio 4: pedir tres números informar el mayor de los tres <br> ";

$edad1=rand(1,90);

$edad2=rand(1,90);

$edad3=rand(1,90);

$variable_aux;

echo "Edad 1 " . $edad1 ." años";
	echo "<br>";
	echo "<br>";
echo "Edad 2 " . $edad2 ." años";
	echo "<br>";
	echo "<br>";
echo "Edad 3 " . $edad3 ." años";
	echo "<br>";
	echo "<br>";

// proceso

		if ($edad1 > $edad2) {

		 	$variable_aux = $edad1;	

		}else

			{
				$variable_aux = $edad2;	
			}

		if($edad3 > $variable_aux){
		 
		  	$variable_aux = $edad3;

		}

echo "<h1>Edad " . $variable_aux ." años</h1>";
?>
