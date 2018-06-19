<?php
include('./database.php');
$user = $_GET['user'];
$status = $_GET['status'];
$conn = new PDO($DB_DSN, $DB_USER, $DB_PASS, $DB_OPT);
$find_user = $conn->query("SELECT USERNAME FROM users");
foreach($find_user as $user_row)
{
    if($user_row['USERNAME'] == $user)
    {
        $find_status = $conn->query("SELECT STATUS FROM users WHERE USERNAME like '$user'");
        foreach($find_status as $stat)
        {
            if($stat['STATUS'] == 0)
            {
                $update = $conn->prepare("UPDATE users SET STATUS=:STATUS WHERE USERNAME like '$user'");
                $update->bindParam(":ACTIVATED", 1);
                $update->execute();
                header("Location:http://localhost:80/index.php");
            }
        }
    }
}
?>