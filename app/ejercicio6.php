<?php

$r=rand(1,3);


if ($r==1){
    $lugar="cataratas";
}else
{
    if($r==2){
        $lugar="ushuaia";    
    }else
         $lugar="bariloche";    }
    {  
    
}
echo "El lugar elgido es ". $lugar;

//$lugar="cataratas";
// ushuaia,cataratas

echo "<br>";



switch ($lugar) {
    case "bariloche";
        echo "Hace frio";
        break;
    case "ushuaia";
            echo "Hace Frio";
        break;
    case "cataratas";
            echo "Hace calor";
        break;
}
?>