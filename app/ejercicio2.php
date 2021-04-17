<?php
//al ingresar un precio se muestra el precio más IVA 

$precio=rand(1,1000);
	echo "precio es ".$precio ;
	echo "<br>";
	echo "Precio con iva 21%: ".$precio*1.21;
?>
