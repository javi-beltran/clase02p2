<?php

$edad=rand(1,40);

echo "La edad es ". $edad;
echo "<br>";
switch ($edad) {
    case 1;
    case 2;
    case 3;
    case 4;
    case 5;
    case 6;
    case 7;
    case 8;
    case 9;
    case 10;
        echo "Es niño";
        break;
    case 11;
    case 12;
    case 13;
    case 14;
    case 15;
    case 16;
    case 17;
    case 18;
         echo "Es adulto";
        break;
    default;
        echo "Es mayor";
}
?>