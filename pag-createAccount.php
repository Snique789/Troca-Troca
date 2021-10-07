<!DOCTYPE html>
<html>
	<head>
		<title>Troca-Troca</title>
		<meta charset=utf-8>
		<meta name=description content="">
		<meta name=viewport content="width=device-width, initial-scale=1">
		<style type="text/css">
			*{
				padding:0px;
				margin:0px;
				border-radius: 5px;
			}
			#content4{
				width: 450px;
				height: 600px;
				border:#323232 solid 5px;
				background-color: #fafafa;
				margin:10px;
				margin-left: auto;
				margin-right: auto;
			}
			.login{
				text-align: left;
				width: 400px;
				height: 35px;
				padding-left: 15px;
				margin:5px;
				font-size: 1.2rem;
				font-family:calibri;
				border:#b5b3b3 solid 3px;
			}
			.login:hover{
				border:#0e83c7 solid 3px;
			}
			#bestLogo{
				margin-top: 20px;
				width: 250px;
				height: 250px;
				background-color: red;
			}
			#switch{
				display: flex;
			}
			.switchD{
				width: ;
			}
		</style>
	</head>
	<body>
		<div id="content4">
			<section id="switch">
				<div class="switchD">
					<p>Login</p>
				</div>
				<div class="switchD">
					<p>Registro</p>
				</div>
			</section>
			<div id="bestLogo">Logo</div>
			<form method="post" action="create.php">
				<input type="text" name="nick" class="login" placeholder="digite seu nome">
				<input type="email"name="email" placeholder="digite seu email" class="login" size="20"/>
				<input type="password"name="password" placeholder="digite sua senha" class="login" size="20"/>
				<input type="submit" name="enviar">
			</form>
			<a href="pag">Não tem conta?Criar</a>
		</div>
	</body>
</html>