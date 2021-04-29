<?php

$host = "localhost";
$user = "root";
$pass = "1111";
$db = "test";

$r = mysqli_connect($host, $user, $pass, $db);

if (!$r){
  echo "Could not connect to server \n";
}

?>
