<?php
 
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
 
$q = "insert into stud(regno,password,fname,lname,semester,email,cell,Gender,City) values('$re','$pa','$fnam','$lnam',$se,'$em',$cel,'$gen','$cit')";
 
if($con->query($q) == TRUE){
    echo "success";
    $con->close();
    header("location:admin_profile.php");
}
else
    echo "something went wrong";
 
$con->close();
?>