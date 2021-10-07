<?php 
session_start();
	if ($_SESSION['logged'] == True) {
		require_once 'conexao_produtoPdo.php';
		require_once 'header.php';
?>
	<!DOCTYPE html>
	<html>
		<head>	
			<meta charset="utf-8">
			<title>Produtos</title>
		</head>
		<style type="text/css">
		a{
			text-decoration: none;
			color: inherit;
		}
		</style>
		<link rel=stylesheet href="css/item.css">
		<body>
			<header id="background">
			<div id="cont_background">
				<?php 
					$query = $conn->prepare("SELECT * from tmp_produto where user like '".$_SESSION['user']."'");
					$query->execute(); 

					while ($dado = $query->fetch()) {
						$nome = $dado['nome'];
						$id = $dado['id'];
						$vip = $dado['vip'];
						$img = $conn->prepare("SELECT * from tmp_img where id_p like '$id' limit 1");
						$img->execute();				
					while ($row = $img->fetch()) {
						$imagem = $row['img'];
						$nomeP = str_replace(" ", "-",$nome)
				?>
				<div id="bah" class="cont_produto">
					<a href="<?php echo strtolower("$nomeP-$id.php") ?>">					
					<img class="img_produto" src="<?php echo"upload/".$imagem ?>" alt="">
					<div class="cont_name"><p id="name"><?php echo "$nome"; ?></p></div>
					<div class="footer">
						<?php 
							if ($vip == 1) {
						 ?>
							<img class="premium" src="upload/premium.png" alt="">
						<?php 
							}
						 ?>
						<div class="prefer"> <p>Troco por: <?php echo "Celular"; ?></p></div>					</div>
					</a>
				</div>
				<?php
					} }
				?>
			</div>
			</header>
		</body>
	</html>
	<?php
}
else{
	header("Location:placeholderIndex.php");
}
?>