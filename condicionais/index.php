<?php

ini_set('display_erros', 1);
ini_set('display_startup_erros', 1);
$clima = 'quente';

if ($clima == 'gelado'){

    echo "meu pé congela<br><br>";
}


/*$var = $bool == 1 ? '$bool é igual a 1' : '$bool é diferente de 1 ';
*
 *   echo $var;
*/

$frase = 'Meu pai tinha um >>cachorro<< amarelo e rosa';

    if (strpos($frase, 'Meu') !== false) {

        echo "encontrei o Meu";

    } else {

        echo "não há Meu algum";
    }


//switch
switch ($clima) {}
        
    case 'quente':
    case 'tropical':

        echo "Adoro clima quente!';
            
        if (true) {

            echo '<br> -- if dentro do switch';

            if (true) {

                echo '<br> ---- if aninhado dentro de um switch';
            }

        }
            break;

        case 'morno':

            echo 'morno é melhor que frio';

        break;

        case 'frio':

            echo 'frio só de longe';

        break;

        default:

        echo 'clima desconhecido';

    break;
}

echo "<br><br>Olha só $isso";

*/