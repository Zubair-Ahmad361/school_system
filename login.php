<html>
<style type="text/css">
	#header{
		height: 10%;
		width: 100%;
		background: black;
		color: white;
		text-align: center;
		font-size: 30px;
		padding-top: 10px;
	}
	#log{
		margin-left: 10%;
		height: 50%;
		width: 80%;
		background: grey;
		color: red;	
		margin-top: 10px;
		font-style: bold;
	}
	input{
		margin-top: 10px;
	}
	#button{
		height: 20%;
		width: 20%;
		margin: 20px;
		background-color: black;
		color: white;
	}
	.in{
		padding-top: 10px;
		margin: 10px;
		margin-top: 10px;
	}
	.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 65%;
  width: 100%;
  text-align: center;
}
#b1
		{
			height:100%;
			width:100%;
		}
</style>
<body>
	<div id="header">
		School Managment System	
	</div>
	<div id="inner">
	
	<div id="b1">
		<div class = "TestRotator">
		<img style="height: 100%; width: 100%;" src="13.jpg" alt="rotating"  id="rotator">
		<script type="text/javascript">
		(function () {
		    var rotator = document.getElementById('rotator'); 
		    var delayInSeconds = 5;
		    var images = ['13.jpg', '14.jpg','15.jpg'];
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

</div>
	<div class="text">
		<form action="login_action.php" method="post">
			<div class="in">
				User Name: <input  type="text" name="user">
				Password: <input type="Password" name="pass"> <br />
			</div>
		
		<input id="button" type="submit" value="Login">
	</form>	
	</div>		
</body>
</html>