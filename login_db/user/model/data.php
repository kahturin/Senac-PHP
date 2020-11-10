<?php

chdir(__DIR__);

require_once '../db.php';

function listar(): array{
	
	global $db;

	$r = $db->query('SELECT id, nome, email, senha FROM usuario');
	$reg = $r->fetchAll();

	return is_array($reg) ? $reg : [];
}
