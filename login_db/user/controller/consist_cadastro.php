<?php

$nome = $_POST['nome'] ?? null;
$email = $_POST['email'] ?? null;
$senha = $_POST['senha'] ?? null;
$conf_senha = $_POST['conf_senha'] ?? null;

$senha = trim($senha);
$email = strtolower($email); //trata o email (deixa tudo minusculo)

$erros = [];

//verifica se o nome tem dois ou mais caractéres
if(strlen($nome) < 2){
    $erros[] =  'o nome tem que ter ao menos dois caracteres';
}

//verifica se o e-mail é válido
if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
    $erros[] = 'e-mail inválido';
} elseif(emailExistente($email)) {
    $erros[] = 'E-mail já cadastrado';
}

//verifica se a senha tem no mínimo 8 caracteres
if (strlen($senha) < 8){
    $erros[] = 'A senha tem que ter ao menos 8 caractéres';
}elseif($senha != $conf_senha){ //verifica se a confirmação da senha bate
    $erros[] = 'A confirmação da senha nao é válido';
}

