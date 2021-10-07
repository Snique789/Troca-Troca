<?php 
			require_once'conexao_produtoPdo.php';
			 
			$produto = $conn->prepare("SELECT * from tmp_produto where id like '11'");
			$produto->execute();

			while ($dado = $produto->fetch()) {
				$name = $dado['nome'];
				$idP = $dado['id'];
				$imagemQ = $conn->prepare("SELECT * from tmp_img where id_p like '$idP'");
				$imagemQ->execute();
				while ($row = $imagemQ->fetch()) {
					$img = $row['img'];
					$id = $row['id'];
				}
			}
				
		?>