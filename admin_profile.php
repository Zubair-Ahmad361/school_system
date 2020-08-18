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
			<title>admin Login</title>
	</head>
	<style type="text/css">
		*{
			background-color: white;
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
			width: 33%;
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
		#b1
		{
			height:200px;
			width:1180px;
			margin-top:10px;
			margin-left: 150px;
		}
		#trotate{
			margin-top: 50px;
		}
		.sbar{
			margin-top: 50px;
		}
	</style>
	<body>
		<center>
		<table border="0px">
			<tr>
				<th style="background-color: white">
					<img id="ID" height="60%" width="60%" src="1.png"></th>
				<th width="80%"><h1 style="background-color: Black">Administration</h1><a href="logout.php"><div id="bu"> Logout </div></a></th>
			</tr>
		</table>
		</center>


		<div id="b1">
		<div class = "TestRotator">
		<img src="2.jpg" alt="rotating" width="1240" height="400" id="rotator">
		<script type="text/javascript">
		(function () {
		    var rotator = document.getElementById('rotator'); 
		    var delayInSeconds = 5;
		    var images = ['3.jpg', '4.jpg', '5.jpg', '6.jpg', '7.jpg'];
		    var num = 0;
		    var changeImage = function () {
		        var len = images.length;
		        rotator.src =  images[num++];
		        if (num == len) {
		            num = 0;
		        }
		    };
		    setInterval(changeImage, delayInSeconds * 1000);
		})();
		</script>
		</div>


		<center><h1 class="sbar"> Student </h1></center>
        <div class="bar">
            <a href="addStudent.php">
                <div class="add">
                    Add Student
                </div>
            </a>
            <a href="updt.php">
                <div class="add">
                    Update Student
                </div>
            </a>
            <a href="Del.php">
                <div class="add">
                    Delete Student
                </div>
            </a>    
        </div>

        <img src="8.png" alt="rotating" width="1240" height="300" id="trotate">

        <center><h1 class="sbar"> Teacher </h1></center>
        <div class="bar">
            <a href="addTeacher.php">
                <div class="add">
                    Add Teacher
                </div>
            </a>
            <a href="updateteacher.php">
                <div class="add">
                    Update Teacher
                </div>
            </a>
            <a href="deleteteacher.php">
                <div class="add">
                    Delete Teacher
                </div>
            </a>    
        </div>
	</body>
</html>