<!DOCTYPE HTML>
<html lang="pt-br">
<?php 
if (isset($_SESSION)) {

}else{
session_start();
}
 ?>
<head>
  <meta charset="UTF-8">
    <title>Header</title>
    <style type="text/css">
    	*{
    		margin: 0;
    		padding: 0;
    	}

		body{
			font-family: Helvetica;
			font-size: 1.3rem;
		}
		#nav-menu{
			width: 100%;
			background:#ffac3b;
			margin:0 auto 50px auto;
			list-style:none;
			overflow-x: hidden;
		}
		#ul-conta{
			list-style: none;
			padding: 2px;
			cursor: default;
			border-radius: 5px;
		}
		.menu{
			display: flex;
			width: 100%;
		}
		.menu li{
			margin:0 auto 0 auto;
		}
		.menu li a{
			margin:auto auto auto 0;
			color:#fff;
			text-decoration:none; 
			padding:10px 15px; 
			display:block;
		}

		.menu li a:hover{
			color:#cecece;
		}	
		li > a{
			font-size: 1.5rem;
			font-weight: 500;
		}
		.menu input{
			margin: 0.4rem 0 0.4rem 0;
			padding-left: 10px;
			font-size: 1rem;
			color:#565656;
			background:none;
			border:none;
			outline: none;
			height: 1.5rem;
			min-width: 450px;
			border-left: solid 2px #B5B2B2;
		}
		div#search{
			margin:auto 0 auto 0;
			height: 2.3rem;
			background:white;
			border-radius: 15px 15px 15px 15px;
			overflow-y: hidden;
		}
		.menu li ul{
			position:absolute;
			top:55px;
			right: 0;
			background:#ffac3b;
			display:none;
		}
		.menu li ul li{
			border-radius: 5px;
			margin:7px 15px 7px 15px;
			display:block;
			width:200px;
		}
		.menu li ul li:hover{
			background: #ffb857;
		}
		hr{
			width: 80%;
			border: rgba(255, 130, 0, .5) solid 1px;
		}
		.menu li ul li a:hover{
			color: white;
		}
		.menu li:hover ul, .menu li.over ul{
			display:block;
		}
		#conta{
			width: 30px;
			height: 30px;
			border-radius: 50px;
			padding: 10px;
			overflow: hidden;
			float: right;
			cursor: pointer;
			margin:5px 0 5px 0;
		}
		#img-conta{
			width: 200px;
			height: 100px;
			position: relative;
			top: -13px;
			right:95px;
		}
		#logo{
			width:auto;
			height:3rem;
		}
		.menu p{
			color: #FFF;
			margin:auto 10px auto 10px;
		}
		.menu li{
			display: inline-flex;
			cursor: pointer;
		}
		a[img="logo"]{
			font-family: burbank big condensed;
			font-size: 2rem;
		}
		img[img="seta"]{
			margin: auto 0 auto 10px;
			width: auto;
			height: 20px;
		}
		#miniSearch{
			width: 35px;
			height: 2.5rem;
			float: left;
		}
		#miniSearch img{
			margin:0.5rem 0 0.5rem 0;
			width: 20px;
			height: 20px;
		}
		#ul-conta li a {
			font-size: 1.5rem;
			font-weight: 500;
		}
		#cont{
			margin:0 auto 0 auto;
			width: 1350px;
		}
		#lupa{
			filter: invert(70%);
		}
		#li-conta{
			display: none;
		}
    </style>	
</head>
<body>
	<nav id="nav-menu">
		<section id="cont">
			<center>
			<ul class="menu">
				<li><a href="placeholderIndex.php" img="logo">TROCA - TROCA</a></li>
				<li>
					<div id="search">
						<form method="get" action="busca.php">
							<div id="miniSearch"><img id="lupa" src="upload/64673.png" alt=""></div>
							<input type="text" name="search" placeholder="O que você está procurando?">
						</form>
					</div>
				</li>
				<li><a id="produto" href="pag-criar_produto.php">Anunciar</a></li>
				<li id="li-conta">
		  			<div id="conta">
				  		<img id="img-conta" src="upload/download.jpg" alt="">
			  		</div>
			  		 <p><?php echo strtoupper($_SESSION['user']); ?></p>
			  		<img img="seta" src="upload/setaBaixo.png" alt="">
		         	<ul id="ul-conta">
								<li><a href="conta-produto.php">Produtos</a></li>
								<hr>
								<li><a href="logout.php">Logout</a></li>
		       		</ul>
	       </li>
	       <li id="login"><a href="loginn.php">Login</a></li>
			</ul>
			</center>
		</section>
	</nav>
	<?php 
		if (isset($_SESSION['user'])) {
	?>
		<script>
			document.getElementById("login").style.display = "none";
			document.getElementById("li-conta").style.display = "flex";
		</script>
	<?php 
		}
	?>
</body>
</html>