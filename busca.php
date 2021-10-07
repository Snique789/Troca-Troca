<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Resultados das buscas</title>
	<style type="text/css">
		*{
			text-decoration: none;
			font-family: helvetica;
		}
		.cProduct img{
			max-width: 200px;
			width: auto;
			height: 150px;
			border-radius: 5px;
			margin: 0 auto 0 auto;
		}
		.cProduct{
			background-color: white;
			width: 800px;
			display: flex;
			padding: 0.5rem;
			margin-bottom: 20px;
			position: relative;
		}
		.cProductdivImg{
			border-radius: 5px;
			display: block;
			width: 200px;
			height: 150px;
			background-color: lightgray;
		}
		.name{
			position: absolute;
			left: 200px;
			margin-left: 50px;
			font-size: 1.4rem;
			color: black;
			display: block;
		}
		.descricao{
			position: absolute;
			bottom: 20px;
			font-size: 1.2rem;
			color: black;
		}
		.wanted{
			font-size: 1.2rem;
			right: 0;
			color: black;
			position: absolute;
			bottom: 20px;
		}
		.footer{
			display: block;
			height: 150px;
		}
		#contBackground{
			background-color: #F4F4F4;
		}
		.user{
			position: absolute;
			font-size: 1.2rem;
			right: 20px;
			top: 20px;
			color: black;
		}
	</style>
</head>
<body>
	<div id="contBackground">
	<center>
<?php  
require_once'conexao_produtoPdo.php';
include_once'header.php';

$texto = $_GET['search'];

$query = $conn->prepare("SELECT * from tmp_produto where nome like '%$texto%'");
$query->execute();

while ($dado = $query->fetch()) {
	$id = $dado['id'];
	$name = $dado['nome'];
	$user = $dado['user'];
	$descricao = $dado['descricao'];
	$wanted = $dado['wanted'];
	$vip = $dado['vip'];
	$imagemQ = $conn->prepare("SELECT * from tmp_img where id_p like '$id' limit 1");
	$imagemQ->execute();
	while ($row = $imagemQ->fetch()) {
		$img = $row['img'];
		$nome = str_replace(" ", "-",$name)
?>
		<a class="cProduct" href="<?php echo"$name"."-$id".".php" ?>">
			<div class="cProductdivImg">
				<img src="<?php echo"upload/$img" ?>" alt="">
			</div>
			<div class="footer">
				<p class="name"><?php echo "$nome"; ?></p>
				<p class="descricao"><?php echo "$descricao"; ?></p>
				<p class="wanted"><?php echo"Troco por: $wanted" ?></p>
				<p class="user"><?php echo"$user"; ?></p>
			</div>
		</a>
<?php
	}
}
include_once'footer.html';
 ?>
	</center>

	</div>
</body>
<script>
	
</script>