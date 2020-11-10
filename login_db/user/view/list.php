<?php

include '../header_tpl.php';
include '../index_menu_tpl.php';

echo '<table>
	<tr>
		<td>ID</td><td>Nome</td><td>E-mail</td>
	<tr>';

foreach($lista as $usuario){
	echo "<tr>
		<td>{$usuario['id']}</td>
		</tr>";
}

echo '</table>';

include '../footer_tpl.php';

