<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

session_start();


$nota = $_POST['nota'];
$explicacao = $_POST['explicacao'];

echo "você deu a nota $nota. Pelo motivo de: $explicacao";

$db = new PDO('mysql:dbname=tsiphp;host=localhost',
              'root',
              '');

$Stmt = $db->prepare('INSERT INTO nps(nota, explicacao)
                      VALUES(:nota, :explicacao)');

$Stmt->bindParam(':nota', $nota);
$Stmt->bindParam(':explicacao', $explicacao);

if ($Stmt->execute()){
    echo 'Pesquisa Gravada com Sucesso';
} else {
    echo 'Não foi Possível Gravar';
}

var_dump ($Stmt->errorInfo());

//echo '<a href="./agradecimento.php?nota=' . $nota 