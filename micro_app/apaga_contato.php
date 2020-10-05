<?php

require_once 'db.php';

//Evita SQL injection - Mas prefira consulta preparada
$id = preg_replace('/\D/', '', $_GET['id']);

if ( $objBanco->exec("DELETE FROM contatinhos WHERE id = $id") !== false ) {

	$msg = 'Registro apagado com sucesso!';

} else {

	$msg = 'Erro ao apagar o registro!';
}

include 'apaga_contato_tpl.php';
