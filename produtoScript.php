<?php 
   //Arquivos externos
	require_once 'conexao_produtoPdo.php';
	require_once 'loginVerifier.php';

   //Data das inputs
	$nomeDoProduto = $_POST['nome'];
	
	$contato = $_POST['contato'];

	$wanted = $_POST['wanted'];
	
	$descricao = $_POST['descricao'];

   //Inserindo o produto
	$query = $conn->prepare("INSERT INTO tmp_produto (nome,descricao,contato,wanted,data,user) values ('$nomeDoProduto','$descricao','$contato','$wanted',now(),'".$_SESSION['user']."' )");
	$query->execute();
	$idP = $conn->lastInsertId();

   //Fazendo upload de imagem,é separado e muito maior...
	$arquivo = isset($_FILES['arquivo']) ? $_FILES['arquivo'] : FALSE;

	$diretorio = "upload/";
	for ($controle = 0; $controle < count($arquivo['name']); $controle++){        
	    $extensao = strtolower(substr($arquivo['name'][$controle], -4));

	    $novo_nome = md5(time()).$controle . substr($arquivo['name'][$controle], -4);

	    $destino = $diretorio."/". $novo_nome;

	    if(move_uploaded_file($arquivo['tmp_name'][$controle], $destino )){ 
	        $sql = "INSERT INTO tmp_img (img,nome,id_p,user) values ('$novo_nome','$nomeDoProduto','$idP','".$_SESSION['user']."')" 	;
	        $conn->query($sql);
	    }else{
	        echo "Erro ao realizar upload";
	    };      
	};
	header("Location: placeholderIndex.php");
?>