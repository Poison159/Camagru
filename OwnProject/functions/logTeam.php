<?php

function log_team($teamName, $gamesWon, $gamesDrawn, $gamesLost) { 
    include_once './database.php';
    try {
            $dbh = new PDO($DB_DSN, $DB_USER, $DB_PASS);
            $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $query= $dbh->prepare("SELECT id FROM teams WHERE teamName=:teamName");
            $query->execute(array(':teamName' => $teamName));

            if ($val = $query->fetch()) {
                $query->closeCursor();
                return(-1);
            }
            $query->closeCursor();

            $query= $dbh->prepare("INSERT INTO teams (teamName, gamesWon, gamesDrawn, gamesLost) VALUES (:teamName, :gamesWon, :gamesDrawn, :gamesLost)");
            $query->execute(array(':teamName' => $teamName, ':gamesWon' => $gamesWon, ':gamesDrawn' => $gamesDrawn, ':gamesLost' => $gamesLost));

            return (0);
        } catch (PDOException $e) {
            echo "ERROR: ".$e->getMessage();
        }
    }

?>
