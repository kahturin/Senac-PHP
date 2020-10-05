<?php

$semana['domingo'] = 0;
$semana['segunda'] = 1;
$semana['terça'] = 2;
$semana['quarta'] = 3;
$semana['quinta'] = 4;
$semana['sexta'] = 5;
$semana['sabado'] = 6;

$hoje = date('m');

echo "\nHoje é " . $semana[$hoje] . "com índicea alfanumérico\n";

echo "\n\n";

$usuario = ["nome" => 'luiz bono',
           "idade" => 25,
           "peso" => 67.8,
           "signo" =>  'aquariano',];

//echo "o professor {$usurio['nome']} tem {%


/*
    $professores = array( 
    0 => array( 'nome' => 'luiz bono',
                'idade' => 25,
                'peso' => 67.8
                'signo' => 'aquariano,
    1 => array( 'nome' => 'thyago quintas',
                'idade' => 30,
                'peso' => 90.8
                'signo' => 'peixes,
    2 => array( 'nome' => 'thiago claro',
                'idade' => 36,
                'peso' => 78.6
                'signo' => 'aquariano'));
*/

// exemplo de vetor com mais de uma dimensão (matriz)
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

?>
<table border="1">
    <tr><td>ID</td> <td>Nome</