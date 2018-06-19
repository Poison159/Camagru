
<?php
session_start();
?>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="viewport" content="height=device-height, initial-scale=1.0">
	<title>cAmAgru | Login</title>
	<link href="css/main.css" rel="stylesheet">
</head>
<body>
	<div class="top-nav">
		<a href="/"><p>cAmAgru</p></a>
	</div>
	<div>
		<form class="frm" id="signin" action="/forms/login.php" method="POST" >
			<div class="notice">
			<?php if(isset($_SESSION['id'])) { ?>
         		<?php header("Location:./camagru.php"); ?>
        	<?php } else { ?>
        	 <?php
				if ($_SESSION['error']) {
					echo $_SESSION['error']; 
				}
          		$_SESSION['error'] = null;
            ?>
			</div>
			<h2><input class="inp" type="email" name="email" placeholder="Email" required></h2>
			<h2><input class="inp" type="password" name="password" placeholder="Password" required></h2>
			<input class="allButs" id="login" name="login" type="submit" value="Login">
			<ul>
				<div class="allButs" id="ulbuts1">
					<a href="signup.php">
						<li class="button">Register</li>
					</a>
				</div>
				<div class="allButs" id="ulbuts2">
					<a href="/reset.php">
						<li class="button">Reset Password</li>
					</a>
				</div>
			</ul>
		</form>
		 <?php } ?>
	</div>
</body>
   <?php include('fragments/footer.php') ?>
</html>
