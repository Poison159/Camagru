<?php

function find_user($userMail) {
  include_once '../config/database.php';
  include_once '../functions/mail.php';

  try {
      $dbh = new PDO($DB_DSN, $DB_USER, $DB_PASS);
      $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $query= $dbh->prepare("SELECT id, email FROM users WHERE email=:email AND verified='Y'");
      $userMail = strtolower($userMail);
      $query->execute(array(':email' => $userMail));

      $val = $query->fetch();
      if ($val == null) {
          $query->closeCursor();
          return (-1);
      }
      $query->closeCursor();
      
      return ($val);
    } catch (PDOException $e) {
      $v['err'] = $e->getMessage();
      return ($v);
    }
}
?>