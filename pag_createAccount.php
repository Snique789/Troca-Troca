<!DOCTYPE html>
<html>
	<head>
		<title>Troca-Troca</title>
		<meta charset=utf-8>
		<meta name=description content="">
		<meta name=viewport content="width=device-width, initial-scale=1">
		<link rel=stylesheet href="css/login.css">
	</head>
	<body>
		<center>
		<div id="contBackground">
			<div id="logo">TROCA - TROCA</div>
			<form method="post" action="createAccountScript.php">
				<div><input class="input" type="text" name="nick" placeholder="digite seu nome"></div>
				<div><input class="input" type="email"name="email" placeholder="digite seu email"/></div>
				<div><input class="input" type="password"name="password" placeholder="digite sua senha" id="password"/></div>
				<button class="input" id="enviar" type="submit" id="submit" name="enviar">Enviar</button>
			</form>
			<div id="button">
				<a href="pag" class="link">Já tem conta?</a>
			</div>
		</div>
		</center>
	</body>
</html>