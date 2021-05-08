
<?php
//Olivieri Javier
$numeroIngresado=rand (0,100);


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
	echo "$numeroIngresado  no es primo";
}else
{
	echo "$numeroIngresado  ES primo";
}



?>