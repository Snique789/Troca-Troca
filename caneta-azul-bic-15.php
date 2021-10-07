<!DOCTYPE html>
<html>
<head>
	<meta charset=utf-8>
	<meta name=description content="">
	<meta name=viewport content="width=device-width, initial-scale=1">
	<title>Troca-Troca-Caneta-Azul-18</title>
	<style type="text/css">
		*{
			margin: 0px;
			padding: 0px;
		}
		#nome{
			font-size: 2rem;
			font-family:monospace;
			color:black;
			margin:20px;
			text-align: left;
		}
		ul{
			list-style: none;
			display: inline-flex;
		}
		.miniI{
			display: block;
			max-width: 150px;
			width: auto;
			height: 110px;
			margin-left:auto;
			margin-right:auto;
		}
		.miniP{
			margin-right: 10px;
			margin-left: 10px;
			border:solid 1px #A8A8A8;
			width: 150px;
			height: 110px;
			cursor: pointer;
			background-image: url(upload/6c7a371350f9023d94409563bed552f50.jpeg);		
		}
		#backgroundP{
			padding-top: 50px;
			padding-bottom: 50px;
			margin-top: 50px;
			margin-right: auto;
			margin-left: auto;
			width: 1000px;
			background-color: rgba(0,0,0,0.2);
		}
		#contP{
			padding:20px;
			width: 800px;
			display: block;
			margin-right: auto;
			margin-left: auto;
			background-color: rgba(255,255,255,0.8);
		}
		.setas{
			margin:auto auto auto auto;
			width: 50px;
			height: 50px;
			border-radius: 500px;
			border:solid 1px black;
			cursor: pointer;
		}
		p#a{
			font-size: 1.2rem;
			font-family: monospace;
			margin-left:50px;
			margin-top: 10px;
		}
		#principalP{
			width: 700px;
			height: 400px;
			display: inline-flex;
			border: solid #A8A8A8 1px;
			margin-bottom:50px;
			background-image:url("upload/6c7a371350f9023d94409563bed552f50.jpeg");
		}
		img#principalI{
			max-width: 850px;
			width: auto;
			height: 400px;
			margin-left: auto;
			margin-right: auto;
		}
		.section{
			display: none;
		}
		div [section='1']{
			display: inline-flex;
		}
		img[lado='L']{
			display: none;
		}
	</style>	
</head>
<body>
	<center>
	<section id="backgroundP">
		<div id="contP">
			<p id="nome">Caneta Azul</p>
			<div id="principalP">
				<img id="principalI" src="upload/6c7a371350f9023d94409563bed552f50.jpeg" alt="">
			</div>
			<ul id="contMiniP">
				<img class="setas" lado="L" src="upload/setaE1.jpg" alt="">
					<div class="section" section='1'>
						<li><div class="miniP" onclick="Click('upload/6c7a371350f9023d94409563bed552f50.jpeg')"><img class="miniI" src="upload/6c7a371350f9023d94409563bed552f50.jpeg" alt=""></div></li>
						<li><div class="miniP" onclick="Click('upload/6c7a371350f9023d94409563bed552f51.jpeg')"><img class="miniI" src="upload/6c7a371350f9023d94409563bed552f51.jpeg" alt=""></div></li>
						<li><div class="miniP" onclick="Click('upload/6c7a371350f9023d94409563bed552f52.jpeg')"><img class="miniI" src="upload/6c7a371350f9023d94409563bed552f52.jpeg" alt=""></div></li>
						<li><div class="miniP" onclick="Click('upload/6c7a371350f9023d94409563bed552f53.jfif')"><img class="miniI" src="upload/6c7a371350f9023d94409563bed552f53.jfif"></div></li>
					</div>
					<div class="section" section='2'>
						<li><div class="miniP" onclick="Click('upload/6c7a371350f9023d94409563bed552f54.jpg')"><img class="miniI" src="upload/6c7a371350f9023d94409563bed552f54.jpg"></div></li>
					</div>
					<div class="section" section='3'></div>
				<img class="setas" lado="R" src="upload/setaD1.jpg" alt="">
			</ul>
			<div id="nome">
				Descrição
				<p id="a">🎵caneta azul🎵</p>
			</div>
		</div>
	</section>
	</center>
	<script>
		var btnR = document.getElementsByClassName('setas')[1];
		var btnL = document.getElementsByClassName('setas')[0];
		var mainPic = document.getElementById('principalI');
		var section1 = document.getElementsByClassName('section')[0];
		var section2 = document.getElementsByClassName('section')[1];			
		var section3 = document.getElementsByClassName('section')[2];
		var secC = 1

		function limpar() {
			section1.style.display ="none";
			section2.style.display ="none";
			section3.style.display ="none";
		}
		btnR.onclick = function () {
			if (secC == 1) {
				limpar();
				aparecer();
				btnR.style.display = "none";
				section2.style.display = "inline-flex";
				secC++
			}
		}
		function aparecer() {
			btnL.style.display = "inline-flex";
			btnR.style.display = "inline-flex";
		}
		btnL.onclick = function(){
			if (secC == 2	) {
				limpar();
				aparecer();
				btnL.style.display = "none";
				section1.style.display = "inline-flex";
				secC--
			}
		}
		function Click(foto) {
			document.getElementById('principalI').src = foto;
			document.getElementById('principalP').style.backgroundImage = "url("+foto+")";
		}
	</script>
</body>
</html>