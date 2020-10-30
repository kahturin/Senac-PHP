<?php

session_start();

require 'sessao.php';

include 'conteudo.php';
include 'header.php';
include 'footer.php';
include 'index_menu_tpl.php';

if(isset($_SESSION['login'])){
	echo 'voce está aqui, ainda é o ' . $_SESSION['nome'];
}else{
	header('Location: index.php');
}
