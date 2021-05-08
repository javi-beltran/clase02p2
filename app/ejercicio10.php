<?php
	echo "<h1>10 de un numero ingresado, mostrar todos los numero primos hasta el 0 (cero)</h1>" ;
$numeroIngresado=rand (3,100);
	echo "El numero ingresado es <h1>$numeroIngresado</h1>";
	echo "<br>";

for ($VariableAux=3;$VariableAux=$numeroIngresado;$VariableAux++){ 
for($numeroAnterior=2;$numeroAnterior<$numeroIngresado;$numeroAnterior++)
{
	if($numeroIngresado%$numeroAnterior==0)
	{
		break;
		//echo "<br> nro: $numeroAnterior";
		//si entra aca no es primo
	}
}

if($numeroAnterior<$numeroIngresado )
{
	//echo "$numeroIngresado  no es primo";
}else
{
	echo "$numeroIngresado  ES primo";
	
	echo"<br>";
	}
	
	$numeroIngresado--;	

	
}




