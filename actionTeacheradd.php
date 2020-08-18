<?php
 
$re = $_POST["reg"];
$fnam = $_POST["fname"];
$lnam = $_POST["lname"];
$grad=$_POST["grad"];
$em=$_POST["email"];
$pa=$_POST["pass"];
$cel=$_POST["cell"];
$gen=$_POST["gender"];
$cit=$_POST["City"];
 
 
$con = new mysqli("localhost", "root" ,"", "school");
 
$q = "insert into teach(regno,password,fname,lname,graduation,email,cell,Gender,City) values('$re','$pa','$fnam','$lnam','$grad','$em',$cel,'$gen','$cit')";
 
if($con->query($q) == TRUE){
    echo "success";
    $con->close();
    header("location:admin_profile.php");
}
else
    echo "something went wrong";
$con->close();
?>