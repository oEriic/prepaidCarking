<?php

$host = "localhost";
$user = "root";
$pass = "0000";
$db = "demo";

$r = mysqli_connect($host, $user, $pass, $db);

if (!$r){
  echo "Could not connect to server \n";
}

?>
