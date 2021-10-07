<!DOCTYPE html>
<html>
	<head>
		<title>login</title>
		<meta charset=utf-8>
	<link rel=stylesheet type="text/css" href="css/login.css">
	<body bgcolor="#f5f8ff">
		<center>
			<div id="contBackground">
				<p id="logo">TROCA - TROCA</p>
				<form action="loginPdo.php" method="post">
					<div>
						<p>Email</p>
						<input class="input" name="email" id="usuario" type="email" ></input>
					</div>
					<div>
						<p>Senha</p>
						<input class="input" name="password" id="senha" type="password"></input>
					</div>
					<div><button class="input" id="enviar" type="submit">Enviar</button></div>
				</form>
				<div id="button">	
					<div><a class="link" href="pag_createAccount.php">Não tem conta? Criar.</a></div>
					<div><a class="link" href="#">Esqueceu a senha</a></div>
				</div>
			</div>
		</center>
	</body>
</html>