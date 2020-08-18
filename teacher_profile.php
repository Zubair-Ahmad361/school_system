<?php
session_start();
if(isset($_SESSION["status"])){
	if($_SESSION["status"]!="verfied")
		header("location:login.php");
}else{
	header("location:login.php");
}

?>
<!doctype html>
<html>
	<head>
			<title>Teacher Login</title>
	</head>
	<style type="text/css">
		*{
	background-color: white;
}
#id{
	background-color: black;
	border-radius: 50%;
}
#header{
	background-color: Black;
	color: White;
	text-align: center;
}
th{
	color: white;
	text-align: center;
	background-color: Black;
}
#Info{
	color: Black;
	background-color: white;
	text-align: left;
}
h3{
		color: Black;
		background-color: white;
		text-align: left;
		padding-left: 10%;
}
p{
		color: Black;
	background-color: white;
	text-align: left;
	padding-left: 10%;
}
tr{
	padding: 30%;
}
#bu{
	text-decoration: none;
	color: white;
	background: grey;
	width: 100px;
	height: 20px;
	margin-left: 80%
}
#bu:hover{
    background: black;
}
a{
	text-decoration: none;
	color: white;
	background: grey;
}
	.add{
			height: 90px;
			width: 28%;
			background-color: Black;
			color: white;
			display: inline-block;
		    text-align: center;
		    font-style: bold;
		    font-size: 20px;
		    padding-top: 30px;
		}
		.add:hover{
		    background: grey;
		}
		.bar{
		    margin-top: 10px;
		}
		#info{
			margin-left: 40px;
		}
	</style>
	<body>

		<center>
		<table border="0px">
			<tr>
				<th style="background-color: white">
					<img id="ID" height="60%" width="60%" src="<?php echo $_SESSION["src"]; ?>"></th>
				<th width="80%"><h1 style="background-color: Black"><?php echo $_SESSION["finame"]." ".$_SESSION["laname"]; ?></h1><a href="logout.php"><div id="bu"> Logout </div></a></th>
			</tr>
		</table>
			<div class="bar">
            <a href="A_Record.php">
                <div class="add">
                    Add Record
                </div>
            </a>
            <a href="A_Record.php">
                <div class="add">
                    Update Record
                </div>
            </a>
            <a href="A_Record.php">
                <div class="add">
                    Delete Record
                </div>
            </a>    
        </div>
        </center>
		<table id="info">
			<tr>
				<td class="Info" colspan="2" >
					<h3>Personal Information:</h3>
					<p>Registration No. :<?php echo $_SESSION["reg"]; ?></p>
					<p>Teacher Name :<?php echo $_SESSION["finame"]." ".$_SESSION["laname"]; ?></p>
					<p>Graduation :<?php echo $_SESSION["grad"]; ?></p>
					<p>City :<?php echo $_SESSION["cit"]; ?></p>
					<p>Gender: <?php echo $_SESSION["gen"]; ?><br>DOB: August 11</p>
				</td>
			</tr>
			<tr>
				<td class="Info" colspan="2" >
					<h3>Contact Infomation:</h3>
					<p>Email: <?php echo $_SESSION["em"]; ?><br>
					Contact: <?php echo $_SESSION["cel"]; ?></p>
				</td>
			</tr>
			<tr>
				<td class="Info" colspan="2" >
					<h3>Objective:</h3>
					<p>To continue my career with an organisation that will utilize <br>my MANAGEMENT,SUPERVISION & ADMINISTRATIVE skills to benefits mutual growth and success.</p>
				</td>
			</tr>
			<tr>
				<td class="Info" colspan="2" >
					</p>
				</td>
			</tr>
			<tr>
				<td class="Info" colspan="2" >
					<h3>Experience:</h3>
					<p>CUI Islamabad (Lahore) </p>
				</td>
			</tr>
			<tr>
				<td class="Info" colspan="2" >
					<h3>Hobbies:</h3>
					<p>1: Cricket<br>2: FootBall</p>
				</td>
			</tr>
		</table>
	</body>
</html>