<?php

//Creado por Cordero Marcos

echo "Centro numerico";
echo "<br>";
$sumar1;                                                   
$sumar2;
$fin=1;
$cuatro=;
while ($cuatro<=0) {
	for($Avanzar=1;$Avanzar<=$Ultimo;$Avanzar++){
		$sumar1=0;
		$sumar2=0;

		for($primerC=1;$primerC<=$Avanzar;$grupo1++) {
			                                                        
			$sumar1+=$primerC;
		}

		for($segundoC=$Ultimo;$segundoC>=$Avanzar+2;$segundoC--) {

			$suma2+=$segundoC;
		}

		if($sumar1==$sumar2) {
			echo "Numerico entre 1 y $Ultimo ";
			echo "es: " . ($Avanzar+1). "<br>";
			$medio = 1;
			break;
		} else {
			if($suma1>$suma2 || $Avanzar==$Ultimo-1 || $Ultimo==1) {
				$medio=0;
				break;
			}
		}
	}
	
	if($medio==1) {
		$cuatro++;
	}

	$Ultimo++;

}
	
?>