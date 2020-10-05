<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

date_default_timezone_set('America/Sao_Paulo');

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

echo "<br><br>";
$semana[0] = 'Domingo';
$semana[1] = 'Segunda';
$semana[2] = 'Terca';
$semana[3] = 'Quarta';
$semana[4] = 'Quinta';
$semana[5] = 'Sexta';
$semana[6] = 'Sabado';

$hoje = date('w');

echo "\nHoje é " . $semana[$hoje] . "\n";

echo "\n\n";

echo "<br><br>";

$semana['Domingo'] = 0;
$semana['Segunda'] = 1;
$semana['Terca'] = 2;
$semana['Quarta'] = 3;
$semana['Quinta'] = 4;
$semana['Sexta'] = 5;
$semana['Sabado'] = 6;

//locale_set_default('')

$hoje = date('l');

echo "\nHoje é " . $semana['Quinta'] . " com indice alfanumérico\n";

echo "\n\n";

        //    constante: uma variavel que nunca irá se alterar. 
// Constantes no PHP
        define('MUNDO', 'Raimundo Nonato');

define('RES_P_PAG', 10);

for ($i = 0 ; $i < RES_P_PAG ; $i++) {
    echo "Resultado $i\n\n";
}

echo 'olá' . MUNDO . "\n\n";

echo "<br><br>";

$usuario = ["nome" => 'luiz bono',
           "idade" => 25,
           "peso" => 67.8,
           "signo" =>  'aquariano',];
//aspas duplas o PHP interpreta variavel junto com string
// como mostrar vetor dentro de string especial (entre aspas duplas)

// O profesor Luiz Bono tem 25 anos, pesa 67,8KG e é aquariano. 
echo "O professor {$usuario['nome']} tem {$usuario['idade']} anos, pesa "
    . number_format($usuario['peso'], 2, ',', '.') . 
    "KG e é {$usuario['signo']}.";

    unset($usuario);
    echo "<br><br>";

    $professores = array(
        0 => array(	'nome' 	=> 	'Luiz Bono',
                    'idade'	=>	25,
                    'peso'	=>	67,
                    'signo'	=>	'aquariano'),
        1 => array(	'nome' 	=> 	'Thiago Claro',
                    'idade'	=>	35,
                    'peso'	=>	54,
                    'signo'	=>	'sagitário'),
        2 => array(	'nome' 	=> 	'Thyago Quintas',
                    'idade'	=>	21,
                    'peso'	=>	71,
                    'signo'	=>	'leonino'));

// var_dump($professores);

?>
<table border="1">
<tr> <td>ID</td> <td>Nome</td> <td>Idade</td> <td>Peso</td> <td>Signo</td> </tr>
<?php
// exemplo de como utilizar uma matriz.
foreach ($professores as $linha => $professor) {
    echo "<tr> <td> $linha </td> 
               <td>{$professor['nome']}</td> 
               <td>{$professor['idade']}</td>
               <td>{$professor['peso']}</td>
               <td>{$professor['signo']}</td> </tr>";
}
?>
</table>