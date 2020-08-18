<?php
 
$Q1 = $_POST['q1'];
$Q2 = $_POST['q2'];
$Assign = $_POST['A1'];
$Mid=$_POST['M1'];
$Final=$_POST['F1'];
$id = $_POST['x'];
$con = new mysqli("localhost", "root" ,"", "school");

$q = "update stud set quiz1=$Q1,quiz2=$Q2,Assignment=$Assign,midTerm=$Mid,finalTerm=$Final where id=$id";
 
if($con->query($q) == TRUE){
    echo "success";
    $con->close();
    header("location:teacher_profile.php");
}
else
    echo "something went wrong";
 
$con->close();
?>