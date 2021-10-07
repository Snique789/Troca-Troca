<?php 
   //Arquivos externos
	require_once'conexao.php';

   //Dados das inputs
	$name = $_POST['nick'];
	$senha = $_POST['password'];
	$email = $_POST['email'];
	$password = md5($senha);

   //Vendo se já existe esse user
	$query = $conn->prepare("SELECT username FROM cadastro WHERE username like '$name' or email like '$email'");
	$query->execute(); 
	if($query->rowCount() > 0){
		echo "Este nome de usuário já está em uso";
		exit();
	}else{
		$insert = "insert into cadastro (data,username,password,email) values (now(),'$name','$password','$email')";
		$conn->query($insert);
		session_start();
		$_SESSION['user'] = $name;
		$_SESSION['img'] = $img;
		$_SESSION['nao_autenticado'] = False;
		$_SESSION['logged'] = True;	
		header("Location: placeholderIndex.php");
	}
?>