<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// microsoft.com/pt-br/download/details.aspx?id=55994 LINK PARA INSTALAÇÃO DO DRIVE DE PHP PARA CONEXÃO COM O SQLSERVER
//$dsn = 'sqlsrv:Server=191.252.177.160\\SQLEXPRESS;Database=pokedex';
$dsn = 'sqlsrv:Server=191.252.177.160;Database=banco';
$user = 'sa';
$password = 'projetofilmes1!';

//como se conectar ao banco
$db = new PDO($dsn, $user, $password);

//var_dump($db);

//como fazer uma consulta
$sql = 'SELECT nome, telefone FROM cliente';

//foreach($db->query($sql) as $registro) {
//	echo "Nome: {$registro['nome']} Telefone: {$registro['telefone']}<br><br>";}

$r = $db->query($sql);
//COMO FAZER UTILIZANDO UM FETCH_ASSOC;
/*
echo '<pre>';
$reg = $r->fetch(PDO::FETCH_ASSOC);

echo "sr(a) {$reg['nome']}, seu telefone {$reg['telefone']} será bloqueado se a conta não for paga";


echo '<pre>';
$reg = $r->fetch(PDO::FETCH_ASSOC);

echo "sr(a) {$reg['nome']}, seu telefone {$reg['telefone']} será bloqueado se a conta não for paga";

echo '<pre>';
$reg = $r->fetch(PDO::FETCH_ASSOC);

echo "sr(a) {$reg['nome']}, seu telefone {$reg['telefone']} será bloqueado se a conta não for paga";
 */

//UTILIZANDO WHILE
//while ($reg = $r->fetch(PDO::FETCH_ASSOC)){
//	echo "sr {$reg['nome']} seu telefone {$reg['telefone']} será bloqueado se a conta não for paga"}

//como fazer um delete
if ($db->query('DELETE FROM cliente WHERE id = 2')){
	echo "id 2 apagado com sucesso";
}else{
	echo "erro ao tentar apagar o id 2";
}

//como fazer um UPDATE
if ($db->query('UPDATE cliente SET nome = "Arthur" WHERE id = 1')){
	echo "ID 1 atualizado com sucesso";
}else {
	echo "falha ao atualizar";
}

//como fazer um SELECT
foreach ($db->query($sql) as $reg) {
	echo "sr(a) {$reg['nome']}, seu telefone {$reg['telefone']} será bloqueado se a conta não for paga";
}

//como fazer um INSERT
if ($db->query('INSERT INTO cliente(id, nome, telefone) VALUES ("13", "Luiz bono", 939393948498)')){
	echo "id 2 gerado novamene com sucesso";
}else{
	echo "falha ao gerar novo ID";
}
