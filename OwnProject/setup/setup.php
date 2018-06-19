<?php
include_once("database.php");

try {
        
        $dbh = new PDO($DB_DSN, $DB_USER, $DB_PASS);
        $sql = "CREATE TABLE `teams` (
          `id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
          `teamName` VARCHAR(50) NOT NULL,
          `gamesWon` INT(8) NOT NULL,
          `gamesDrawn` INT(8) NOT NULL,
          `gaemsLost` INT(8) NOT NULL,
        )";
        $dbh->exec($sql);
        echo "Table teams created successfully\n";
    } catch (PDOException $e) {
        echo "ERROR CREATING TABLE: ".$e->getMessage()."\nAborting process\n";
    }
?>