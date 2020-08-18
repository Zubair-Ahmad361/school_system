<html>
<?php
$id = $_GET["i"];
$con = new mysqli("localhost", "root" ,"", "school");
$q = "select * from stud where id = " . $id ;

//echo $q;
$rs = $con->query($q);
$r = $rs->fetch_assoc();

?>
<body>
		<center>
		<table border="0px">
			<tr>
				<th style="background-color: white">
					<img id="ID" height="60%" width="60%" src="1.png"></th>
				<th width="80%"><h1 style="background-color: Black">Update Student</h1></th>
			</tr>
		</table>
		</center>
	<div id="f">
		<center><h1>Update Form</h1></center>
			<form method="post" action="UpdateMyForm_action.php">
			Registation No. :<input name="reg" type="text" value=""><br>
			Your Name :<input type="text" name="fname" placeholder="First">
			<input type="text" name="lname" placeholder="Last"><br>
			Semester :<input name="sem" type="number" value=""><br>
			Email :<input type="email" name="email"><br>
			Password :<input name="pass" type="password" value="" placeholder="xxxxxxxxx"><br>
			Cell :<input type="phone" name="cell"><br>
			Gender: <br>
			<input type="radio" name="gender" value="m">Male
			<input type="radio" name="gender" value="f">Female
			<input type="radio" name="gender" value="o">Other<br>
			City :
			<select name="City">
				<option>Lahore</option>
				<option>Islamabad</option>
				<option>Karachi</option>
				<option>Lodhran</option>
			</select><br>

			<input type="submit" value="Update" />
   			<input type="reset" value="clear me" />
		</form>
		</div>
<body>
</html>

