<?php

$server = "localhost";
$user = "root";
$password = "";
$database = "db_koperasi";

$connection = mysqli_connect($server, $user, $password, $database) or die(mysqli_error($connection));

?>