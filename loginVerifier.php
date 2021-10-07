<?php 
if (isset($_SESSION)) {

}else{
session_start();
}
if (empty($_SESSION['logged']) || $_SESSION['logged'] == False) {
?>
<script type="text/javascript">
	window.location.href = "loginn.php";
</script>
<?php	
}else{
	$_SESSION['logged'] = True;
}
?>