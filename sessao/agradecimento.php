<?php

session_start();

echo 'voce é o' . $_SESSION['user'] . '<br><br>';

$nota = $_GET['nota']; //existe o 
$protocolo = 
if ($nota >= 8){
    echo 'estamos muito felizes';
} else {
    echo 'o que podemos fazer para melhorar o atendimento?';
}

echo "Se o protocolo é o $protocolo";