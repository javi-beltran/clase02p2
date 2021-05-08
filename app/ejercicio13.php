<?php


function sumar($numero1,$numero2){
	$suma=$numero1+$numero2;
	return $suma;
}

function retornar($numero2){
	if($numero2==0)
	{
		return false;
	}
	else{
		return true;
	}
	

}
	

function dividir($numero1,$numero2){
	if($numero2==true){
		$divide=$numero1/$numero2;
		return $divide;

	}else
	{
		echo"INFINITO";
	}
	
}

	
 

function resultado($funcion){
		return $funcion;
		
}


function calcule ($numero1,$operador,$numero2){
	switch ($operador) {
		case "+":
			echo resultado (sumar($numero1,$numero2));
			break;
		case "/":
			echo resultado (dividir($numero1,$numero2));
			break;
		
		default:
			echo"Operador solo el + o el /";
			break;
	}
}
//  calcule (2,"+",6);

?>