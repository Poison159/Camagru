<?php

include './functions/logTeam.php';
// retreive values

if(isset($_POST['submit'])){
    $teamName   = $_POST['Name'];
    $gamesWon   = $_POST['Won'];
    $gamesDrawn = $_POST['Drawn'];
    $gamesLost  = $_POST['Lost'];

    if (($val = log_team($teamName, $gamesWon, $gamesDrawn, $gamesLost)) == -1){
    echo "team already exists";
    }else
    echo "Team Added sucessfully";
}

?>
