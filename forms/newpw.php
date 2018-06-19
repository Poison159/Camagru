
<?php
session_start();

include('../functions/newpw.php');

// retreive values
	if(isset($_POST['send']))
	{
		$password = $_POST['password'];
		$password_c = $_POST['password_c'];
		$mail = $_SESSION['email'];

		$_SESSION['error'] = null;
		if($password == $password_c){
			$password = hash("whirlpool", $password);
			if (($res = newpw($password,$mail)) == -1) {
				$_SESSION['error'] = "password could not be set for " . $mail;
			} else if(isset($res['err'])) {
				$_SESSION['error'] = "internal err " . $res['err'];
			}else{
			  $_SESSION['reset_success'] = true; 
			}
		}
		header("Location:../newpw.php");
	}
?>