<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = "mysql";

$r = mysqli_connect($host, $user, $pass, $db);

if (!$r){
  echo "Could not connect to server \n";
}

?>
