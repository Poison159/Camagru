<?php
session_start();
?>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="viewport" content="height=device-height, initial-scale=1.0">
	<title>cAmAgru | Reset</title>
	<link href="css/main.css" rel="stylesheet">
</head>
<body>
	<div class="top-nav">
		<a href="/"><p>cAmAgru</p></a>
	</div>
	<div>
		<form class="frm" id="reset" action="forms/reset.php" method="POST" >
			<h2><input class="inp" type="email" id="email" name="email" placeholder="Email" onkeyup="checkUserName()" ></h2>
			<input class="allButs" id="resetBut" name = "reset" type="submit" value="Reset">
			<br>
			<br>
			<br>
			<div class="notice" id="resetNoticeDiv">
				<?php
					if(isset($_SESSION['error'])){
					  	echo $_SESSION['error'];
					}
					if(isset($_SESSION['id'])){
						header("Location: ../newpw.php");
					}
				 ?>
			</div>
		</form>
	</div>
	<script>
		function checkUserName()
		{
			var unameboxElement = document.getElementById("username");
			var username = unameboxElement.value;
			var resetBut = document.getElementById("resetBut");
			var pattern = new RegExp(/[~`@!#$%\^&*+=\-\[\]\\';,/{}|\\":<>\?1234567890]/);
			if (pattern.test(username) || username.length < 1)
			{	
				unameboxElement.style.borderBottom =  "2px #D12E7D solid";
				unameboxElement.style.borderRight = "2px #D12E7D solid";
				resetBut.disabled = true;
				return false;
			}
			else
			{
				unameboxElement.style.borderBottom =  "2px dodgerblue solid";
				unameboxElement.style.borderRight = "2px dodgerblue solid";
				resetBut.disabled = false;
				return true;
			}
		}
	</script>
</body>
</html>
