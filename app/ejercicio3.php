<?php
	/*
	3-al ingresar un mes del año informar si es invierno, verano, otoño o primavera. 

	may - jun otoño
	5   - 6
	jul - agos invr
	7  - 8
	sep - oct prim 
	9   - 10*/
	
	$mes=rand(1,12);
	echo "Mes " . $mes;

	switch($mes) {
		case 5: 
			echo " es Otoño";
		break;
		case 6: 
			echo " es Otoño";
		break;
		case 7: 
			echo " es Invierno";
		break;
		case 8: 
			echo " es Invierno";
		break;
		case 9: 
			echo " es Invierno";
		break;
		case 10:
			echo " es Invierno";
		break;
		default;
			echo " es Primavera";
	}
				
?>