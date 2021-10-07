<?php
session_start();
include('conexao.php');
if (isset($_POST['user'])) {
	$usuario = mysqli_real_escape_string($con,$_POST['user']);

	$senha = mysqli_real_escape_string($con,$_POST['senha']);

	$query = "select * from cadastro where username like '$usuario' and password like md5('$senha'); ";
	$result = mysqli_query($con,$query);

	$row = mysqli_num_rows($result);
	while ($dados = mysqli_fetch_array($result)) {
		$username = $dados['username'];
		$password = $dados['password'];
		$img = $dados['img_profile'];
	};

	if ($row >= 1) {
		$_SESSION['user'] = "$username";
		$_SESSION['senha'] = "$password";
		$_SESSION['img'] = "$img";	
	}else{
		$_SESSION['nao_autenticado'] = True;
		header("location: loginn.php");
	};
}
?>