<?php
$DB_DSN = "mysql:host=localhost;dbname=camagru;charset=utf8";
$DB_USER = "root";
$DB_PASS = "";
$DB_OPT = [
PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
PDO::ATTR_EMULATE_PREPARES   => false,
];
?>

