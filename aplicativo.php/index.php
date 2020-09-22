<?php

require_once 'db.php';
// como evitar SQL Injection
// preparo a consulta
$objStmt = $objBanco->prepare('INSERT INTO contatinhos(nome, whatsapp)
                               VALUES(:nm, :whatsap )');

//substitui as etiquetas digitadas pelo usuário (nm, whatsap) pelo etiqueta usada na criação do formulario 
$objStmt->bindParam(':nm', $_POST['nome']);
$objStmt->bindParam(':whatsap', $_POST['whatsapp']);

// executo:
if ($objStmt->execute()) {
    $msg = 'obrigado por se cadastrar';

} else {
    $msg = 'deu erro, tente novamente';
}

include 'contatoGravado.php';