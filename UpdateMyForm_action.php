<?php
$id = $_POST["x"];
$re = $_POST["reg"];
$fnam = $_POST["fname"];
$lnam = $_POST["lname"];
$se=$_POST["sem"];
$em=$_POST["email"];
$pa=$_POST["pass"];
$cel=$_POST["cell"];
$gen=$_POST["gender"];
$cit=$_POST["City"];


$con = new mysqli("localhost", "root" ,"", "school");

$q = "update stud set regno = '$re', password = $pa, fname = $fnam, lname = $lnam, semester = $se, email = $em, cell = $cel, Gender = $gen , City = $cit where id = $id";

echo $q;

if($con->query($q) == TRUE){
	echo "success";
	$con->close();
	header("location:MyForm.php");
}
else
	echo "something went wrong";

$con->close();
?>
