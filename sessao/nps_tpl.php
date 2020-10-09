<?php

session_start();

var_dump($_SESSION);

$_SESSION['user'] = 'Karina';

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
</head>
<body>
    <ceter>
        <p> Qual a probabilidade de vocês nos recomendar à um amigo ou colega?</p>
        <br><br>
        <form method="post" action="nps.php">
            Pouco provável
            <?php
            for ($i = 1; $i <= 10; $i++){
                echo "<input type='radio' id='nps$i' name='nota' value='$i'>
                      <label for='nps$i'>$i</label>";
            }
            ?>
            Muito provável
            <br><br>
            Explique o motivo da sua nota, por gentileza.
            <textarea name='explicacao' cols='90' rows="5"></textarea>
            <input type="submit" name='avaliacao' value="avaliar">
        </form>
    </ceter>
</body>
</html>