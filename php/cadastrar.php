<html lang="pt-br">
	<head>
		<meta charset="utf-8"/>
		<title>Cadastrar GLM</title>
		<link rel="stylesheet" href="../CSS/style.css">
	</head>
	<body>

		<div id="logo">
			<img src="../imagens/logo-glm.jpg" alt="logo" height="64" width="88">
		</div>
		
		<div id="corpo-form-cad">
			<h1>Cadastrar</h1>
			<form method="POST">
				<input type="text" name="nome" placeholder="Nome Completo" maxlength="30">
				<input type="text" name="telefone" placeholder="Telefone" maxlength="30">
				<input type="email" name="email" placeholder="Usuário" maxlength="40">
				<input type="password" name="senha" placeholder="Senha" maxlength="15">
				<input type="password" name="confSenha" placeholder="Confirmar Senha" maxlength="15">
				<input type="submit" value="Cadastrar">
			</form>
		</div>	
	</body>
</html>