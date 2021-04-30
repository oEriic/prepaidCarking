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
			echo "Connection established</br>";
			$query = "CREATE TABLE PurchasedSpaces(
			SpaceName VARCHAR(50) PRIMARY KEY,
			SpaceDays INTEGER,
			SpaceHours INTEGER,
			SpaceMinutes INTEGER,
			SpacePrice INTEGER
			)
			"; //You can check http://localhost/phpmyadmin/ to see if tables are created, nums is column 1, names is column 2
			$succeed = mysqli_query($link,$query); //returns false if failed
			if(!$succeed){
				echo "not created</br>";// won't create another table if one with this name is already there, I think 
			}
			else{
				echo "table created</br>";
			}
			
			$query2 = "INSERT INTO PurchasedSpaces
						VALUES (\"sfdg\", 21, 23, 35, 324);
			"; //first argument in values is for first column, second one is for second column
			
			mysqli_query($link,$query2);
			
			$query3 = "INSERT INTO PurchasedSpaces
						VALUES (\"sfdg\", 1, 2, 34, 326);
			";
			
			mysqli_query($link,$query3);
			
			$query4 = "SELECT * FROM PurchasedSpaces"; // gets everything in the table and returns it as a mysqli_result object if SELECT, SHOW, DESCRIBE or EXPLAIN is used, there may be more cases than these where it returns a mysqli_result object.
			$results = mysqli_query($link,$query4); // restults is the mysqli_result object
			$row = mysqli_fetch_row($results); // everytime fetch row is used, it returns the next row as array, this returns the first row as array
			$row2 = mysqli_fetch_row($results); // this returns the second row as array
			echo "You purchased Space " . $row[0] . " for " . $row[1] . " days, " . $row[2] . " hours, and " . $row[3] . "minutes. Cost: $" . $row[4] . "</br>";
			echo "You purchased Space " . $row2[0] . " for " . $row2[1] . " days, " . $row2[2] . " hours, and " . $row2[3] . "minutes. Cost: $" . $row2[4] . "</br>";
		}
		echo mysqli_get_server_info($link) . "\n"; // returns server infor
		mysqli_close($link); // closes connection
		?>