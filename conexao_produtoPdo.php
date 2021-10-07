<?php 
	$username = "bot";
	$password = "S4EgnJ45/*CfG%";
	
try {
	$conn = new PDO('mysql:host=localhost:3306;dbname=dados',$username, $password); 
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);	

} catch(PDOException $e) {
    echo 'ERROR: ' . $e->getMessage();
}

 ?>