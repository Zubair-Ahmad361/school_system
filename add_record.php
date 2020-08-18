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
				<th width="80%"><h1 style="background-color: Black">Add Record</h1></th>
			</tr>
		</table>
		</center>
		<center><h1>Record Form</h1></center>
		<div id="f">
			<?php
			$con = new mysqli("localhost", "root" ,"", "school");
			$x = $_GET['i'];
			$q="select * from stud where id=$x";
			$rs=$con->query($q);
			$r = $rs->fetch_assoc();
			?>
			<form method="post" action="A_R.php">
			ID: <input type = "text" name="x" value="<?php echo $x; ?>" readonly/> <br />
			Quiz 1 :<input name="q1" type="text" value="<?php echo $r['quiz1']; ?>"/><br>
			Quiz 2 :<input type="text" name="q2" value="<?php echo $r['quiz2']; ?>"/><br>
			Assignment :<input name="A1" type="text" value="<?php echo $r['Assignment']; ?>"/><br>
			Mid Term :<input type="text" name="M1" value="<?php $r['midTerm'] ?>"/><br>
			Final Term :<input name="F1" type="text" value="<?php echo $r['finalTerm']; ?>"/><br>
			<input type="submit" value="Add to DataBase">
		</form>
		</div>
	</body>
</html>