<?php
 
session_start();
require 'sessao.php';

include 'header_tpl.php';
include 'index_menu_tpl.php';
include 'conteudo_tpl.php';
include 'footer_tpl.php';
 
echo 'Você aqui, ainda é o: ' . $_SESSION['nome'];
