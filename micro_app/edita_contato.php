<?php

require_once 'db.php';

if (isset($_POST['id'])){

	$id = preg_replace('/\D/', '', $_POST['id']);
	$nome = $_POST['nm'];
	$whatsapp = $_POST['whats'];

	$objStmt = $objBanco->prepare('UPDATE contatinhos SET nome = :nm, whatsapp = :wzap
									WHERE id = :id');

	$objStmt->bindParam(':id', $id);					
	$objStmt->bindParam(':nm', $nome);					
	$objStmt->bindParam(':wzap', $whatsapp);	

	if ($objStmt->execute()) {
		$msg = 'Contato editado com sucesso.';
	} else {
		$msg = 'Tente novamente!';
	}

}

$_GET['id'] = $_GET['id'] ?? $_POST['id'] ?? null;

//Evita SQL injection (Mas prefira consulta preparada)
$id = preg_replace('/\D/', '', $_GET['id']);

$contato = array();

$lista_sql = "	SELECT id, nome, whatsapp 
				FROM contatinhos 
				WHERE id = $id";

foreach($objBanco->query($lista_sql) as $registro){

	$contato = $registro;
} 
	
include 'edita_contato_tpl.php';
