<?php

$con = new mysqli("localhost", "root" ,"", "school");
$x = $_GET['i'];
$q = "delete from teach where id=$x";

if($con->query($q) == TRUE){
	echo "success";
	$con->close();
	header("location:DT.php");
}
else
	echo "something went wrong";

$con->close();
?>
