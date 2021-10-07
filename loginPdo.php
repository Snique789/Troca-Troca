<?php 
	require 'conexao.php';

	$input1 = $_POST['email'];
	$input2 = $_POST['password'];

	$email = "$input1";
	$senha = md5($input2);

	//Vendo se existe esse nick
	$query = $conn->prepare("SELECT username,password,img_profile FROM cadastro where email like '$email' and password like '$senha' ");
	$query->execute();

	while ($dado = $query->fetch()) {
		$img = $dado['img_profile'];
		$user = $dado['username'];
	}

	if($query->rowCount() > 0){
		session_start();
		$_SESSION['user'] = $user;
		$_SESSION['img'] = $img;
		$_SESSION['nao_autenticado'] = False;
		$_SESSION['logged'] = True;	
		header("Location: placeholderIndex.php");
		exit();
	}else {
		session_start();
		$_SESSION['nao_autenticado'] = True;
		$_SESSION['logged'] = False;
		header("Location: loginn.php");
		exit();
	} 
?>