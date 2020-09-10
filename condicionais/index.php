<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$clima = 'morno';

if ($clima == 'gelado') {
    echo "<br><br>Meu pé congela<br><br>";
}

$bool = '1';
$var = $bool === 1 ? '$bool é igual a 1' : '$bool é diferente de 1'; //=== ele não leva em consideração o tipo.

echo $var . '<br><br>';

$var = $bool == 1 ? '$bool é igual a 1' : '$bool é diferente de 1'; //=== ele não leva em consideração o tipo.

echo $var . '<br><br>';

$var = $bool != 1 ? '$bool é diferente de 1' : '$bool é igual a 1'; //=== ele não leva em consideração o tipo.

echo $var . '<br><br>';

$frase = 'Meu pai tinha um cachorro amarelo e rosa '; 
    if (strpos($frase, 'cachorro')) {
        echo "Encontrei o cachorro";
    } else {
        echo "não encontrei algum";
    }

    $frase = 'Meu pai tinha um cachorro amarelo e rosa '; 
    if (strpos($frase, 'Meu') != false) {
        echo "Encontrei o Meu";
    } else {
        echo "<br><br>não encontrei o meu<br><br>";
    }
echo "<br><br>";
switch ($clima) {
    case 'quente':
    case 'tropical';
        echo "adoro clima quente";
        break;

    case 'morno':

        echo 'morno é melhor que frio';
        break;
    
    case 'frio':

        echo 'adoro quando está longe';
        break;

    case 'gelado':

        echo 'canadá';
        break;
    default:
        echo 'clima desconhecido';
    break;
}

$isso = 'véi';

$isso = $isso ?? 'coisa';
echo "<br><br>olha só $isso";