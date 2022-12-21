<?php
	session_start();
	if(!isset($_SESSION['id_usuario']))
	{
		header("lacation: index.php");
		exit;
	}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>DOCUMENTOS</title>
	<link rel="stylesheet" href="CSS/estilo.css">
</head>
<body>
	<div id="corpo-priv">
	
SEJA BEM VINDO!!!
<a href="sair.php"> Sair </a>

</div>
</body>
</html>

