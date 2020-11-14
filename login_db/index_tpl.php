<html>
	<head>
		<title>Meu site</title>
	</head>
	<body>
		<br><br><br><br>
		<center>
			<table border="1">
				<tr>
					<td>
						<form method="post" action="user/cadastro.php">
							<br>
							<?php
							if ( isset($msg) ) echo $msg;
							?>
							<br>
							<br>
							<label for="nome">Nome</label>
							<input type="text" id="nome" name="nome">
							<label for="email">Email</label>
							<input type="text" id="email" name="email">
							<label for="login">Senha</label>
							<input type="password" id="senha" name="senha">
							<br>
							<br>
							<label for="conf_senha">Confirmar Senha</label>
							<input type="password" id="conf_senha" name="conf_senha">
							<br><br>
							<input type="submit" name="entrar" value="Cadastrar-se">
						</form>	
					</td>
				</tr>
			</table>
		</center>
	</body>
</html>

