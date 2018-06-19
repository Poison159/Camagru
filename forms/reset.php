<?php
session_start();

include '../functions/reset.php';

// retreive values
	if(isset($_POST['reset']))
	{
		$mail = $_POST['email'];
		$_SESSION['error'] = null;

		if (($res = find_user($mail)) === -1) {
		    $_SESSION['error'] = "user not found";
		  } else if($res['err']) {
		    $_SESSION['error'] = "internal error" . $res['err'];
		  }else {
		 	$_SESSION['id'] = $res['id'];
		 	$_SESSION['email'] = $mail;
		}
		header("Location: ../reset.php");
	}
?>