<?php
session_start();
if(isset($_SESSION["status"])){
	if($_SESSION["status"]!="verfied")
		header("location:login.php");
}else{
	header("location:login.php");
}

?>
<html>
<body>
	Hello Good morning Mr. <?php echo $_SESSION["username"]; ?>
<br/>

	<a href="logout.php"> Logout </a>
</body>
</html>