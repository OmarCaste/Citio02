<?php
$server = "localhost";
$username = "root";
$password = "omarneko61";
$dbname = "animalesweb";

$connection = new mysqli($server, $username, $password, $dbname);
$connection ->set_charset("utf8");
if($connection ->connect_error){
    die("No funca: ".$connection->connect_error);
}
?>