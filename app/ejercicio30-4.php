<?php
echo "<h3 php 2do 2da </h3>";
//include_once "ejercicio1-30-04.php";echo "<br>"; // incluir php d otro archivo

//include_once "ejercicio1-30-04.php";echo "<br>"; // incluir php d otro archivo


//require_once "ejercicio1-30-04v.php";echo "<br>"; // incluir php d otro archivo


//var_dump($miNombre);
//echo  "llegue";


/*--------
require "ejercicio1-30-04.php";echo "<br>"; // incluir php 
$miNombre="mi nombre";
mostrar($miNombre);
*/


$i=0;
for(;;){
	if ($i ==10)
	{
		break;
	}
	$i++;
	echo $i;
}
$contador=0;
while($contador<10)
{
    $contador++;
    echo "<br>contador :$contador";
}
?>