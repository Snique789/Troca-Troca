<!DOCTYPE html>
<html>
	<head>
		<meta charset=utf-8>
		<meta name=description content="site de trocas">
		<meta name=viewport content="width=device-width, initial-scale=1">
		<title>calma lá digitando...</title>
		<style type="text/css">
			a{
				text-decoration: none;
			}
			.cont_background{
				margin-left: auto;
				margin-right: auto;
				justify-content: space-between;
				width: 1000px;
				background: white;
				display:flex;
				flex-wrap:wrap;
			}
			#background{
				padding-top: 20px;
				padding-bottom: 20px;
			}
			.border_img{
				width: 220px;
				height: 180px;
				border-radius:8px;
				background-color: lightgray;
			}
			*{
				padding: 0px;
				margin: 0px;
			}
			a{
				text-decoration: none;
			}
			.cont_produto{
				font-family: helvetica;
				color: rgba(0, 0, 0, 0.7);
				font-size: 1.2rem;
				margin: 10px;
				margin-right: auto;
				margin-left: auto;
			}
			.cont_name{
				font-family: helvetica;
				width: 220px;
				color: rgba(0, 0, 0, 0.7);
				font-size: 1rem;
				padding: 5px;
			} 	
			.img_produto{
				max-width: 220px;
				width: auto;
				height: 180px;
				border-radius:8px;
			}
			#background{
				width: 100%;
				height: auto;
				background: #F4F4F4;
			}
			#cont_background{
				margin-left: auto;
				margin-right: auto;
				width: 1000px;
				display:flex;
				flex-wrap:wrap;
			}
			.prefer{
				text-align: right;
				padding: 5px;
				margin: auto 10px auto auto;
				font-size: 0.9rem;
			}
			.premium{
				margin: auto 0 auto auto;
				width:30px;
				height: 30px;
			}
			.footer{
				display: inline-flex;
				justify-content: space-between;
				width: 100%;
				height: 40px;
			}
		</style>
	</head>
	<?php
		include_once('header.php');
		require_once'conexao_produtoPdo.php'; 
		$vip = $conn->prepare("SELECT * from tmp_produto where vip like '1'");
		$vip->execute();

		$products = $conn->prepare("SELECT * from tmp_produto where vip like '0'");
		$products->execute();

	?>
	<body>
		<center>
		<section id="pArea">
			<header id="background">
				<p>Recentes</p>
			<div class="cont_background">
			<?php 
				while($dado = $vip->fetch()){
					$name = $dado['nome'];
					$id = $dado['id'];
					$wanted = $dado['wanted'];
					$img = $conn->prepare("SELECT * from tmp_img where id_p like '$id' limit 1");
					$img->execute();				
				while ($dado = $img->fetch()) {
					$imagemP = $dado['img'];
					$nomeP = str_replace(" ", "-",$name)
			?>
					<a href="<?php echo"$nomeP-$id.php" ?>">
					<div class="cont_produto">
						<div class="border_img"><img class="img_produto" src="<?php echo"upload/".$imagemP ?>" alt=""></div>
						<div class="cont_name"><p id="name"><?php echo "$nomeP"; ?></p></div>
						<div class="footer">
							<div class="prefer"> <p>Troco por: <?php echo "$wanted"; ?></p></div>
						</div>
					</div>
					</a>
			<?php 
				}
				} 
			?>
			</div>
			<p>Sem vip</p>
			<div class="cont_background">
			<?php 
				while($row = $products->fetch()){
					$name = $row['nome'];
					$id = $row['id'];
					$wanted = $row['wanted'];
					$img = $conn->prepare("SELECT * from tmp_img where id_p like '$id' limit 1");
					$img->execute();				
				while ($dado = $img->fetch()) {
					$imagemP = $dado['img'];
					$nomeP = str_replace(" ", "-",$name)
			?>
					<a href="<?php echo"products/".strtolower($nomeP)."-$id.php" ?>">
					<div class="cont_produto">
						<div class="border_img"><img class="img_produto" src="<?php echo"upload/".$imagemP ?>" alt=""></div>
						<div class="cont_name"><p id="name"><?php echo "$name"; ?></p></div>
						<div class="footer">
							<div class="prefer"> <p>Troco por: <?php echo "$wanted"; ?></p></div>
						</div>
					</div>
					</a>
			<?php 
				};
				};
			?>
			</div>
			</header>
		</section>
		</center>
		<?php include_once'footer.html'; ?>
	</body>
</html>