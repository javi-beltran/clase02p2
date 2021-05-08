<?php 
$i=0;
$numero=rand (-10,10);
//$numero=22;
echo "El numero es ". $numero;
echo "<br>";
	if ($numero>0)
	{

		for ($i=$numero; $i>0 ; $i--) { 
			echo "$i";
			echo "<br>";
			if($i==0){
				break;
			}
			
		}
	}
	else
    {
    	echo "No se puede";
    }
 ?>