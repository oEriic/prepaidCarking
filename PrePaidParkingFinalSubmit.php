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
			$test = $_POST;
			$query = "CREATE TABLE PurchasedSpacesFinal(
			SpaceName VARCHAR(50) PRIMARY KEY,
			SpaceHours INTEGER,
			SpacePrice INTEGER
			)
			"; //You can check http://localhost/phpmyadmin/ to see if tables are created, nums is column 1, names is column 2
			$succeed = mysqli_query($link,$query); //returns false if failed
			$query2 = "SELECT * FROM PurchasedSpaces"; // gets everything in the table and returns it as a mysqli_result object if SELECT, SHOW, DESCRIBE or EXPLAIN is used, there may be more cases than these where it returns a mysqli_result object.
			$results = mysqli_query($link,$query2); // restults is the mysqli_result object
			$cost = 0;
			$totalcost = 0;
			$confmsg = "";
			$totalmsg = "";
			foreach($test as $test2){
				$row = mysqli_fetch_row($results);
				
				if (substr($row[0],0,1) == "I"){
					$cost = $test2 * 24;
					$totalcost += $cost;
				}
			    else {
					$cost = $test2 * 12;
					$totalcost += $cost;
				}
				$query3 = "INSERT INTO PurchasedSpacesFinal (SpaceName,SpaceHours,SpacePrice)
						VALUES (" . "\"" . $row[0] . "\"" . "," . "\"" . $test2 . "\"" . "," . "\"" . $cost . "\"" . ");
				";
				mysqli_query($link,$query3);
				$confmsg .= "<h3> Renting Space " . $row[0] . " for " . $test2 . " hours. Cost: $" . $cost . ".00" . "</h3>" ;
			}
			$totalmsg = "<h3> Total cost is: $". $totalcost .".00 </h3>";
		}
		mysqli_close($link); // closes connection
		?>
<html lang = "en">
	<head>
		<meta charset = "UTF-8"/>
		<title>Parking Confirmation</title>
		<link rel="stylesheet" href="PrePaidParkingStyles.css">
	</head>
	<body>
		<div>
			<h1>The following items have been added to your purchase:</h1>
		</div>
		<?= $confmsg ?>
		<?= $totalmsg ?>
		<div>
			<a href = "PrepaidParking.php">Back to parking space selction screen</a>
		</div>
		</br>
		<div>
			<a href = "homepage.php">Back to homepage</a>
		</div>
	</body>
<html>