<?php
/*
1.- de C a F. Parametros: recibe 1 parametro y retorna un valor
2.- de F a C. Parametros: recibe 1 parametro y retorna un valor
3.- mostrar temperatura: recibe los parametros que quiera
4. transformar. Parametros: recibe 1 temperatura y a qué la quiere transformar (F, C, otro)
*/

	function fahrenheit ($function){
		return $resultadoFahrenheit =($function*1.8)+32 ." °Fahrenheit";	
	}


	function celsius ($function){
		return $resultadoCelsius=(($function-32)/1.8) ." °Celsius";
	}
	


	function transformar ($Transformar,$temperatura){
		switch($Transformar){
			case"f";
				echo fahrenheit ($temperatura);
					
			break;

			case "c";
				echo celsius ($temperatura);
					
			break;

			default;
			echo "Solo f o c <br> Gracias";
		}
	}

//elegir c en minusculas para convertir a °centigrados
//elegir f en minusculas  para convertir a °fahrenheit
$Transformar="f";
$temperatura=10;

transformar("f","10");

?>