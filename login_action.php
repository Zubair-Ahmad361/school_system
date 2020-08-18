<?php

session_start();

$u = $_POST["user"];
$p = $_POST["pass"];
 

$con = new mysqli("localhost", "root" ,"", "school");
     $q1="select * from stud where regno='$u' and password='$p'";
     $R=$con->query($q1);
     $R1=$R->fetch_assoc();
     echo $R1["regno"];
//////////////////// Admin Login //////////////////
if($u == "admin" && $p == "123"){
	$_SESSION["status"]="verfied";
	$_SESSION["username"] = $u;
	header("location:admin_profile.php");
} else if($u == $R1["regno"] && $p == $R1["password"]){
	$_SESSION["status"]="verfied";
	$_SESSION["reg"] = $u;
	$_SESSION["finame"] = $R1["fname"];
	$_SESSION["laname"] = $R1["lname"];
	$_SESSION["sem"] = $R1["semester"];
	$_SESSION["em"] = $R1["email"];
	$_SESSION["cel"] = $R1["cell"];
	$_SESSION["gen"] = $R1["Gender"];
	$_SESSION["cit"] = $R1["City"];
	$_SESSION["src"] = $R1["picSrc"];

	header("location:stu_profile.php");
} else{
	$con->close();
	$con = new mysqli("localhost", "root" ,"", "school");
     $q="select * from teach where regno='$u' and password='$p'";
     $R=$con->query($q);
     $R1=$R->fetch_assoc();
     echo $R1["regno"];
//////////////////// Admin Login //////////////////
	if($u == $R1["regno"] && $p == $R1["password"]){
		$_SESSION["status"]="verfied";
		$_SESSION["reg"] = $u;
		$_SESSION["finame"] = $R1["fname"];
		$_SESSION["laname"] = $R1["lname"];
		$_SESSION["grad"] = $R1["graduation"];
		$_SESSION["em"] = $R1["email"];
		$_SESSION["cel"] = $R1["cell"];
		$_SESSION["gen"] = $R1["Gender"];
		$_SESSION["cit"] = $R1["City"];
		$_SESSION["src"] = $R1["picSrc"];

		header("location:teacher_profile.php");
	} else{
		$_SESSION["status"]="NotVerfied";
		header("location:login.php");
	}
}
?>