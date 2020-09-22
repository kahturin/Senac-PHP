<?php

$db = mysqli_connect('localhost', 'root', '', 'tsiphp');

/*echo '<pre>';

var_dump($db);

*/
// conectando-se ao banco:

$query = mysqli_query($db, 'CREATE TABLE contatinhos(id BIGINT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
                                            nome VARCHAR(255) NOT NULL,
                                            whatsapp BIGINT)');
if ($query) {
        echo 'tabela contatinhos criada com sucesso<br>';
} else {
    echo 'não foi possível criar a tabela contatinhos';
}

echo '<br><br>';
$contatinhos = ['nome' => 'Karina Lima', 'whatsapp' => '5511972177453'];
// inserindo dados no banco:

$insert = mysqli_query($db, "INSERT INTO contatinhos 
                    (nome, whatsapp) 
                    VALUES
                    ('{$contatinhos['nome']}', '{$contatinhos['whatsapp']}')");

if ($insert) {
    echo 'inserido com sucesso na tabela';

} else {
    echo 'não foi inserido nenhum dado';
}

//Lendo dados na tabela do banco:

$query = mysqli_query($db, 'SELECT id, nome, whatsapp
                            FROM contatinhos');
echo '<table border="1">';
echo "<tr><td>ID</td><td>NOME</td><td>WHATSAPP</td></tr>";
while ($registro = $query->fetch_assoc()) {
    echo "<tr><td>{$registro['id']}</td>
              <td>{$registro['nome']}</td>
              <td>{$registro['whatsapp']}</td></tr>";
}
echo '</table>';
// alterar dados na tabela
// delete from contatinhos;
// ALTER TABLE contatinhos AUTO_INCREMENT = 1;
if (mysqli_query($db, 'DELETE FROM contatinhos WHERE id = 10')) {
    echo "reigstro apagado com sucesso";
} else {
    echo "não foi possível apagar";
}

//$_POST $_GET $_REQUEST = Vetores super globais para recebermos dados do usuário.
// (usaremos isso no PI).