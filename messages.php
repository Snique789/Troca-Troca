<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>messsages</title>
	<style type="text/css">
		#contMsg{
			width: 500px;
			height: 550px;
			border: 2px black solid;
			position: relative;
			display: flex;
			flex-wrap: wrap;
		}
		#footerMsg{
			position: absolute;
			bottom: 0;
			width: 500px;
			height: 50px;
			display: flex;
			margin-bottom: 5px;
			justify-content: space-around;
		}
		form{
			width: 500px;
			height: 50px;
			justify-content: space-between;
		}
		input{
			width: 400px;
			height: 40px;
		}
		#btn{
			width: 50px;
			height: 50px;
			background: skyblue;
			color: white;
		}
		.msg{
			max-width: 70%;
			min-width: 30%;
			height: 50px;
			margin-left: 70px;
			text-align: right;
			border: 1px solid black;
		}
		.photoProfile{
			margin: 17px 0 0 10px;
			width: 50px;
			height: 50px;
			border-radius: 50px;
		}
	</style>
</head>
<body>
	<center>
	<section id="contMsg">
		<ul id="cont-messages">
		</ul>
		<div id="footerMsg">
			<input type="text" onkeypress="if(event.keyCode==13) {enviar()}" id="msg" name="msg"/>
			<input id="btn" type="submit" onclick="enviar()" />
		</div>
	</section>
	</center>
	<script type="text/javascript">
		function enviar() {
			var msg = document.querySelector("#msg").value
			document.getElementById('msg').value = "";
			var message = document.createElement("li")
			var profile = document.createElement("img")
			profile.src = "upload/dog.jpg"
			message.innerHTML = msg;
			document.getElementById("contMsg").appendChild(message);
			message.classList.add("msg");	
			document.getElementById("contMsg").appendChild(profile);
			profile.classList.add("photoProfile");
		}
	</script>
</body>
</html>