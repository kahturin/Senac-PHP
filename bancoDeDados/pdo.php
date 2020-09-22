<?php

include_once 'config.php';

$objBanco = new PDO(DSN, DB_USER, DB_PASS);

$consulta = $objBanco->query('SELECT id, nome, whatsapp FROM contatinhos', PDO::FETCH_ASSOC);

echo "<pre>";

// var_dump ($objBanco->errorInfo()); comando para ajudar a debugar os erros. 

foreach ($consulta as $registro) {
    echo "ID: {$registro['id']} 
          NOME: {$registro['nome']} 
          whatsapp: {$registro['whatsapp']} <br>";
}

if ($objBanco->query('DELETE FROM contatinhos WHERE id = 4')) {
    echo "<br> REGISTRO APAGADO<br>";
}
// $apagar = $objBanco->query('DELETE FROM contatinhos WHERE id = 10');

if ($objBanco->query("INSERT INTO contatinhos (nome, whatsapp) VALUES ('Fulano de Tal', 6666666)")){ //campo numerico sem aspas
    echo "Inserido na tabela com sucesso";
} else {
    echo "nome e whats NÃO INSERIDOS";
}
echo "<br><br>";

if ($objBanco->query("UPDATE contatinhos SET nome = 'TESTANDO' WHERE id = 5")) {
    echo "atualizado";
} else {
    echo "falha!!!";
}

foreach ($consulta as $registro) {
    echo "id: {$registro['id']} nome: {$registro['nome']} whatsapp: {$registro['whatsapp']}";
}