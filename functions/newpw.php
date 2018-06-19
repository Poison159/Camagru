
<?php

	function newpw($password,$userMail){
		include_once '../config/database.php';
  		include_once 'mail.php';
  		try{
			$dbh = new PDO($DB_DSN, $DB_USER, $DB_PASS);
		    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$query= $dbh->prepare("UPDATE users SET password=:password WHERE email=:email");
		    $query->execute(array(':password' => $password, ':email' => $userMail));

	      	$val = $query->fetch();
	     	 if ($val == null) {
	          $query->closeCursor();
	          return (-1);
	     	}
	      	$query->closeCursor();
	      	//send_forget_mail($userMail, $val['username'], $password);
	      	return ($val);
      	}catch(PDOException $ex){
      		$v['err'] = $ex->getMessage();
      		return ($v);
      	}
	}
?>