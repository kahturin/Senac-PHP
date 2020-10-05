<?php

date_default_timezone_set('America/Sao_Paulo');

for ($i = 0, $j = 4 ; $i < 5 ; $i++, $j--) {
    echo "linha: $i $j<br>";
}
echo "<br><br>";
// exemplo de while
$i = 0;
$j = 4;
while ($i < 5) {
    echo "linha: $i $j<br>";

    $i++;
    $j--;
}

echo "<br><br>";
// exemplo do while
$i = 0;
$j = 4;
do {
    echo "Linha: $i $j<br>";

    $i++;
    $j--;
} while ($i < 5);

$domingo = 0;
$segunda = 1;
$terca = 2;
$quarta = 3;
$quinta = 4;
$sexta = 5;
$sabado = 6;

var_dump(date('d/m/Y'));

switch (date('w')) {
    case 'domingo';
        echo 'Domingo';
break;
    case 'segunda':
        echo 'Segunda';
break;
    case 'terca':
         echo 'Terca';
break;
    case 'quarta':
        echo 'Quarta';
break;
    case 'quinta':
        echo 'Quinta';
break;
    case 'sexta':
        echo 'Sexta';
break;
    case 'sabado':
        echo 'Sabado';
break;
}

$semana[0] = 'Domingo';
$semana[1] = 'Segunda';
$semana[2] = 'Terca';
$semana[3] = 'Quarta';
$semana[4] = 'Quinta';
$semana[5] = 'Sexta';
$semana[6] = 'Sabado';