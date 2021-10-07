<!DOCTYPE html>
<html>
<head>
	<meta charset=utf-8>
	<meta name=description content="">
	<meta name=viewport content="width=device-width, initial-scale=1">
	<title>Crie seu produto!</title>
	<?php 
		include_once 'header.php';
		include_once 'loginVerifier.php';
	?>
	<style type="text/css">
		*{
			font-family: helvetica;
		}
		#contBackground{
			margin: 0 auto 0 auto;
			width: 600px;
			background: white;
			padding: 20px 0 20px 0;
		}
		#background{
			padding:50px 0 50px 0;
			background: #F4F4F4;
		}
		p{
			text-align: left;
			margin:0 0 10px 50px;
		}
		.input{
			border: 2px solid #E6E6E6;
			background:white;
			width: 80%;
			height: 2rem;
			border-radius: 5px;
			padding-left:25px;
			font-size: 1.2rem;
			font-family: helvetica;
			outline: 0px;
		}
		input[type="file"] {
		    display: none;
		}
		textarea{
			font-size: 1.2rem;
			font-family: helvetica;
			width: 100%;
			height: 300px;
			outline: 0px;
			background: none;
			border: 2px solid #ccc;
			justify-content: space-evenly;
			margin-bottom: 20px;
		}
		.photo{
			width: 80%;
			height: 300px;
			border: #ccc solid 2px;
		}
		.i-fp{
			width: 50%;
			height: auto;
			margin: 100px 0 0 0;
		}
		#vip{
			display: flex;
			justify-content: space-around;
			margin-top: 20px;
		}
		.form{
			margin-top: 20px;
		}
		#submit{
			width: 120px;
			height: 50px;
			padding: 5px;
			font-size: 1.3rem;
			border: 4px solid #E6E6E6;
			border-radius: 5px;
			cursor: pointer;
			background: none;
			margin-left: 380px;
		}
		#submit:hover{
			background: darkorange;
			color: white;
			border: none;
		}
		label{
			width: 80%;
			justify-content: space-evenly;
			display: flex;
		}
		span{
			width: 80%;
			display: flex;
			background: ;
		}
	</style>
</head>
<body>
	<center>
	<section id="background">
	<div id="contBackground">
		<form enctype="multipart/form-data" method="POST" action="produtoScript.php">
			<div class="form">
				<p>Nome do produto</p>
				<input class="input" type="text" name="nome" required>
			</div>
			<div class="form">
				<p>Contato</p>
				<input class="input" type="text" name="contato" required>
			</div>
			<div class="form">
				<p>Troco por:</p>
				<input class="input" type="text" name="wanted" required/>
			</div>
			<div class="form">
				<p>Local</p>
				<input class="input" type="text" name="local" placeholder="Ex: Palotina, Imigrantes" required>
			</div>
			<div class="form">
				<p>Descrição</p>
			</div>
			<span>
				<textarea name="descricao" maxlength="700"></textarea>
			<label for="file">
				<div class="photo">
					<img class="i-fp" src="upload/abobora.png" alt="aa">
				    <input type="file" id="file" name="arquivo[]" multiple="multiple" required />
			    </div>
			</label>
			</span>
		    <input id="submit" name="enviar" type="submit" value="Publicar">
		</form>
	</div>
	</section>
	</center>
</body>