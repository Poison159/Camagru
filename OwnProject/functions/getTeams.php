<?php

 function getTeams(){
    include_once 'database.php';
    try{
        $dbh = new PDO($DB_DSN, $DB_USER, $DB_PASS);
        $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $query= $dbh->prepare("SELECT teamName FROM teams ORDER BY id");
        $query->execute();

        $i = 0;
        $tab = null;
        while (($val = $query->fetch())) {
            $tab[$i] = $val;
            $i++;
        }
        $query->closeCursor();
        return ($tab);
    }catch (PDOException $e) {
      $s;
      $s['error'] = $e->getMessage();
      return ($s);
    }
 }
?>