<?php
		$host = "localhost";
		$user = "root";
		$pass = ""; //If you set a password for the sql server, put it here, otherwise the xampp sql server should have no password for the root user by default, so it would be blank
		$db = "mysql"; //Name of the database that the created tables are inserted into, seems like there is already a database named "mysql" in xampp by defualt, you can check http://localhost/phpmyadmin/
		@ $link = mysqli_connect($host, $user, $pass, $db); //returns false if failed
		if (!$link){
			echo "Could not connect to server</br>";
			trigger_error(mysqli_connect_error(), E_USER_ERROR);
		} 
		else{
			$query = "CREATE TABLE PurchasedSpaces(
			SpaceName VARCHAR(50) PRIMARY KEY,
			SpaceHours INTEGER,
			SpacePrice INTEGER
			)
			"; //You can check http://localhost/phpmyadmin/ to see if tables are created, nums is column 1, names is column 2
			$succeed = mysqli_query($link,$query); //returns false if failed
			$test = $_POST;
			$timeask = "";
			$name = "a";
			foreach($test as $test2){
				$query3 = "INSERT INTO PurchasedSpaces (SpaceName)
						VALUES (" . "\"" . $test2 . "\"" . ");
			";
				mysqli_query($link,$query3);
				$timeask .= "<label>Please enter the amount of hours you wish to rent for Space ". $test2 ." <input type = \"text\" name = ". "\"" . $name . "\"" ."> </label> </br> </br>"; 
				$name .= "a";
			}
			$timeask .= "<input type = \"submit\" value = \"CONFIRM RENTAL TIME\"/> "; 
		}
		mysqli_close($link); // closes connection
		?>
<html lang = "en">
	<head>
		<meta charset = "UTF-8"/>
		<title>Rental Period</title>
		<link rel="stylesheet" href="PrePaidParkingStyles.css">
	</head>
	<body>
		<div>
			<form action = "PrePaidParkingFinalSubmit.php" method = "POST">
				<?= $timeask ?>
			</form>
		</div>
		<div>
			<a href = "PrePaidParking.php">Back to parking space selection screen</a>
		</div>
	</body>
<html>