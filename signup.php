<?php
	session_start();
?>
<html>
<head lang ="en">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" charset="UTF-8">
	<meta name="viewport" content="height=device-height, initial-scale=1.0">
	<title>cAmAgru | Register </title>
	<link href="./css/main.css" rel="stylesheet">
</head>
<body>

	<div class="top-nav">
		<a href="/"><p>cAmAgru</p></a>
	</div>
	<div>
		<form class="frm" id="signup" action="forms/signup.php" method="POST" >
			<span>
				<div class="notice">
				<?php
		            echo $_SESSION['error'];
		            $_SESSION['error'] = null;
		            if (isset($_SESSION['signup_success'])) {
		              echo "Signup success please check your mail box";
		              $_SESSION['signup_success'] = null;
		            }
	            ?>
				</div>
			</span>
			<h2><input class="inp" type="text" id="username" name="username" placeholder="Username" onkeyup="checkUserName()"></h2>
			<h2><input class="inp" type="text" id="email" name="email" placeholder="E-Mail" onkeyup="checkEmail()"></h2>
			<h2><input class="inp" type="password" id="password" name="password" placeholder="Password" onkeyup="checkPassword(true)"></h2>
			<h2><input class="inp" type="password" id="password_c" name="password_c" placeholder="Confirm Password" onkeyup="confAll()"></h2>
			<div id="pass_checker">
				<div class="figure" id="length">Length: 6 more</div>    
				<div class="figure" id="sc">Special Character/Number</div>
				<div class="figure" id="conf">Confirm Password</div>
			</div>
			<input class="allButs" id="register" name ="register" type="submit" value="Register">
		</form>
	</div>
	<div class="home">
		<a href="/">Already Registered?</a>
	</div>
	<script type="text/javascript" src="js/front.js"></script>
</body>
</html>