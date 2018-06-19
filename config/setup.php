<?php
$filename="./camagru.sql";
$host="127.0.0.1";
$user = "root";
$pass = "Leoniddas1";
$database = "camagru";
$con = mysql_connect($host, $user, $pass) or die("Error connecting: " .mysql_error());
if (mysql_query("CREATE DATABASE camagru",$con))
{
    echo "Database created";
}
//selects database
mysql_select_db($database) or die ("Error selecting DB" .mysql_error());
// reads sql file, removes comments and irrelivant text and executes sql queries
    $templine = '';
    $lines = file($filename);
        foreach ($lines as $line_num => $line) {
        if (substr($line, 0, 2) != '--' && $line != '') {
            $templine .= $line;
            if (substr(trim($line), -1, 1) == ';') {
                mysql_query($templine) or print('Error performing query \'<b>' . $templine . '</b>\': ' . mysql_error() . '<br /><br />');
                $templine = '';
            }
        }
    }
?>