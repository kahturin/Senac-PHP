<?php

include '../header_tpl.php';
include '../index_menu_tpl.php';

echo '<table border="1">
        <tr border="1">
        <td>ID</td><td>Nome</td><td>Email</td>
        </td>';

foreach ($lista as $usuario){
    echo "<tr>
            <td>{$usuario['id']}</td>
            </tr>";

}

echo '</table>';

include '../footer_tpl.php';
