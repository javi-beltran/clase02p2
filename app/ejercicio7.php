<?php
$numero1=rand(0,90);

$numero2=rand(0,90);

$numero3=rand(0,90);
echo "numero 1 " . $numero1 ; 
echo "<br>";
echo "numero 2 " . $numero2 ; 
echo "<br>";
echo "numero 3 " . $numero3 ; 
echo "<br>";
if (($numero1>$numero2 && $numero1<$numero3)||($numero1<$numero2 && $numero1>$numero3)){
		echo"Hay numero 1 = ". $numero1 ." tiene medio";
	}else
	{
		if (($numero2>$numero3 && $numero2<$numero1)||($numero2<$numero3 && $numero2>$numero1)){
			echo"Hay numero 2 = ". $numero2 ." tiene medio";
		}else
			{
				if (($numero3>$numero2 && $numero3<$numero1)||($numero3<$numero2 && $numero3>$numero1)){
					echo"Hay numero 3 = ". $numero3 ." tiene medio";
				}else
				{
					echo "<h1>No tine medio </h1>";					
				}
			}
	
	}
	
?>