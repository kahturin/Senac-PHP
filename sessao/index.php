<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

session_start();

$credenciais = [0 => ['user' => 'karina@karina.com', 'passwd' => '123abc'],
		1 => ['user' => 'marcos@marcos.com', 'passwd' => '123abc']];
if(isset($_SESSION['login'])){
	include 'header.php';
        include 'footer.php';
	include 'index_menu_tpl.php'; // caso o usuario ja esteja logado no sistema

if (isset($_POST['entrar'])){ // caso o usuário tenha acabado de preencher o formulario de login

	$login = $_POST['login'];
	$senha = $_POST['senha'];

	if(in_array(['user' => $login, 'passwd' => $senha], $credenciais)){
		$_SESSION['login'] = $login;

		include 'header.php';
		include 'footer.php';
		include 'index_menu_tpl.php';
	}else{
		$msg = 'credenciais inválidas, tente novamente';
		include 'index_tpl.php';
	}

	echo "<a hreg='index.php'> SAIR </a>";
}else{ // caso o usuário tenha acabado de chegar no sistema.

	include 'index_tpl.php';

}

