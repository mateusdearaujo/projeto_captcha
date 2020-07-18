<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Projeto - Captcha</title>
	<style>
		body {
			background-color: #34495e;
			color: #FFFFFF;
		}
	</style>
</head>
<body>
<?php
session_start();
if(empty($_SESSION['captcha'])) {
	$n = rand(1000, 9999);

	$_SESSION['captcha'] = $n;
}

if(!empty($_POST['codigo'])) {

	if($_POST['codigo'] == $_SESSION['captcha']) {
		echo "Acertou";
	} else {
		echo "Errou";
	}
	$n = rand(1000, 9999);

	$_SESSION['captcha'] = $n;
}
?>

<img src="imagem.php" alt="Captcha" title="Captcha">

<form method="POST">
	<input type="text" name="codigo">
	<input type="submit" value="Verificar">
</form>	
</body>
</html>