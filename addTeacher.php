<!doctype html>
<html>
	<head>
			<title>Student Login</title>
	</head>
	<style type="text/css">
		*{
	background-color: white;
	}
th{
	color: white;
	text-align: center;
	background-color: Black;
}

tr{
	padding: 30%;
}
#f{
	padding: 10px;
	margin-left: 10%;
}
input{
	padding: 10px;
	margin-top: 10px;
}
	</style>
	<body>
		<center>
		<table border="0px">
			<tr>
				<th style="background-color: white">
					<img id="ID" height="60%" width="60%" src="1.png"></th>
				<th width="80%"><h1 style="background-color: Black">Add Teacher</h1></th>
			</tr>
		</table>
		</center>
		<center><h1>Registration Form</h1></center>
		<div id="f">
			<form method="post" action="actionTeacheradd.php">
			Registation No. :<input name="reg" type="text" value=""><br>
			Your Name :<input type="text" name="fname" placeholder="First">
			<input type="text" name="lname" placeholder="Last"><br>
			Graduation :<input name="grad" type="text" value=""><br>
			Email :<input type="email" name="email"><br>
			Password :<input name="pass" type="password" value="" placeholder="xxxxxxxxx"><br>
			Cell :<input type="phone" name="cell"><br>
			Gender: <br>
			<input type="radio" name="gender" value="M">Male
			<input type="radio" name="gender" value="F">Female
			<input type="radio" name="gender" value="O">Other<br>
			City :
			<select name="City">
				<option>Lahore</option>
				<option>Islamabad</option>
				<option>Karachi</option>
				<option>Lodhran</option>
			</select><br>

			<input type="submit" value="Add to DataBase">
		</form>
		</div>
	</body>
</html>