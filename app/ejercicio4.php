<?php

echo "<h1>Ejercicio 4: pedir tres números informar el mayor de los tres</h1> <br> ";
echo "<br>";
$edad1=rand(1,90);

$edad2=rand(1,90);

$edad3=rand(1,90);

//$variable_aux;
$numMayor="nada";

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

	if ($edad1>$edad2 && $edad1>$edad3){
		$numMayor=$edad1 ;
	}else
	{
		if($edad2>$edad3){
			$numMayor=$edad2;	
		}else
			{
				$numMayor=$edad3;		
			}
	}
	echo "<h1>La edad mayor es ->  ".$numMayor ." </h1>";		
/*
	if ($edad1>$edad2 && $edad1>$edad3){
		echo "<h1>La edad mayor es edad 1 ".$edad1 ." </h1>";
	}else
	{
		if($edad2>$edad3){
			echo "<h1>La edad mayor es edad 2 ".$edad2 ." </h1>";	
		}else
			{
				echo "<h1>La edad mayor es edad 3 ".$edad3 ." </h1>";		
			}
	}
*/

/* LA IDEA ES "AGRUPAR LOS IF"
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
*/
?>
