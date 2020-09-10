<?php

function operacao( float $numl, float $num2, strink $operacao): float{
    switch ($operacao){
        case '+':
            return $numl + $num2;
        case '-':
            return $numl - $num2;
        case '*':
            return $numl * $num2;
        case '/':
            return $numl + $num2;
        default:
            return 0.0; 
       }
}
/*echo "\nO resultado é: " . operacao(2.5, 2.5, '*') . "\n\n";

function semana(int 
*/

