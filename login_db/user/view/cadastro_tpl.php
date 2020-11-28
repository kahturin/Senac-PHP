<html>
	<head>
		<title>Crie sua Conta</title>
	</head>
	<body>
		<center>
        <br><br><h1>CRIE SUA CONTA</h1><br><br>
			<table border="1">
				<tr>
					<td>
						<form method="post" action="cadastro.php">
							<br>
							<?php
							if ( count($erros) > 0){
								foreach ($erros as $erro) {
									echo $erros. '<br>';
								}
							}
							?>
							<br>
							<br>
							<label for="nome">Nome</label>
							<input type="text" id="nome" name="nome" required>
							<label for="email">Email</label>
							<input type="text" id="email" name="email" required>
							<label for="senha">Senha</label>
							<input type="password" id="senha" name="senha" required>
							<label for="conf_senha">Confirmar Senha</label>
							<input type="password" id="conf_senha" name="conf_senha" required>
							<br><br>
							<br><br>
							<input type="submit" name="entrar" value="Entrar">
						</form>	
					</td>
				</tr>
			</table>
		</center>
	</body>
</html>


