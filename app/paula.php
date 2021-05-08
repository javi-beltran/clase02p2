<?php

echo "ingrese un numero entero: "; 
$numero=6;
echo $numero;
$aumento=1;
while ($aumento < $numero){
                
                $sumaAtras = 0;
                $sumaAdelante = 0;

                // Calculo para atras
                for ($i = 1; $i < $aumento; $i++){
                    $sumaAtras = $sumaAtras + $i;
                }
            
                //calculo para adelante
                for ($j = $aumento + 1; $j <= $sumaAtras; $j++){
                    if (($sumaAdelante == $sumaAtras)||($sumaAdelante > $sumaAtras))
                    
                       break;
                    
                    $sumaAdelante = $sumaAdelante + $j;

                }
            
        
                // Mostrando en pantalla
                if ($sumaAtras === $sumaAdelante)
                {
                echo "<br>Es centro numerico " ;
            }
            $aumento++;
        }
            //else 
            //{
                //echo "no es centro numerico";
            //}
    ?>