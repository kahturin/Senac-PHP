<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

function operacao(float $num1, //float é o tipo de dado esperado
                  float $num2, // parametro obrigatório
                  string $operacao = '+'): float { 
    switch ($operacao) {
        case '+':
            return $num1 + $num2; // return já é a saída da operação, por tanto, não precisa de break;
        case '-':
            return $num1 - $num2;
        case '/':
             return $num1 / $num2;
        case '*':
            return $num1 * $num2;
        default:
            return 0.0;
    }
}

$dia = 2; //variavel fora do escopo da funcao

echo "\nO resultado é: " . operacao(2.5, 2.5, '/') . "\n";

echo "<br><br>";
function diaSemana(int $dia): string {
    $semana = ['Domingo', 'Segunda', 'Terça', 'Quarta', 'Quinta', 'Sexta', 'Sabádo'];
    return $semana[$dia] ?? 'Use de 0 a 6';
}

echo "Odia é " . diaSemana(3);

$nome = 'bono';
// passagem de parametro por referencia, o "&" ;-) (muda o valor da variavel fora do escolpo    da funcao)
function mudaNome(string &$var): string {
    $var = 'Outro nome';
    return $var;
}
echo "<br><br>";

echo " A função retornará " . mudaNome($nome);

echo "<br><br>";

echo " A variável \$nome ainda vale $nome";