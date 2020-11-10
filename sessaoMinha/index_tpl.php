<html>
	<head>
		<title>Meu Site</title>
	</head>
	<body>
		<br>><br>
		<center>
			<table>
				<tr>
					<td>
						<form method="post" action="index.php">
						<?php
						if (isset4($msg) )echo $msg;
						?>
							<label for="login">Login</label>
							<input type="text" name="login">
							<label for="Senha">Senha</label>
							<input type="password" name="senha">
							<input type="submit" name="entrar" value="Entrar">
						</form>
					</td>
				</tr>
			</table>
		</center>
	</body>
</html>
