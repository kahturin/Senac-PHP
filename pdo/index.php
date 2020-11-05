<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// microsoft.com/pt-br/download/details.aspx?id=55994 LINK PARA INSTALAÇÃO DO DRIVE DE PHP PARA CONEXÃO COM O SQLSERVER
//$dsn = 'sqlsrv:Server=191.252.177.160\\SQLEXPRESS;Database=pokedex';
$dsn = 'sqlsrv:Server=191.252.177.160;Database=banco';
$user = 'sa';
$password = 'projetofilmes1!';

$db = new PDO($dsn, $user, $password);

//var_dump($db);

$sql = 'SELECT nome, telefone FROM cliente';

foreach($db->query($sql) as $registro) {
	echo "Nome: {$registro['nome']} Telefone: {$registro['telefone']}";
		}
