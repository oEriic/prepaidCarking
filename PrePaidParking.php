<!DOCTYPE HTML>
<html lang = "en">
	<head>
		<meta charset = "UTF-8"/>
		<title>Prepaid Carking</title>
		<?php
		$host = "localhost";
		$user = "root";
		$pass = ""; //If you set a password for the sql server, put it here, otherwise the xampp sql server should have no password for the root user by default, so it would be blank
		$db = "mysql"; //Name of the database that the created tables are inserted into, seems like there is already a database named "mysql" in xampp by defualt, you can check http://localhost/phpmyadmin/
		@ $link = mysqli_connect($host, $user, $pass, $db); //returns false if failed
		if (!$link){
			echo "Could not connect to server</br>";
			trigger_error(mySQLi_connect_error(), E_USER_ERROR);
		} 
		else{
			echo "Connection established</br>";
			$query = "CREATE TABLE testtable(
			nums INTEGER PRIMARY KEY
			)
			"; //You can check http://localhost/phpmyadmin/ to see if tables are created
			$succeed = mysqli_query($link,$query); //returns false if failed
			if(!$succeed){
				echo "not created</br>";
			}
			else{
				echo "table created</br>";
			}
			
			$query2 = "INSERT INTO testtable
						VALUES (12345);
			";
			
			mysqli_query($link,$query2);
			
			$query3 = "INSERT INTO testtable
						VALUES (123456);
			";
			
			mysqli_query($link,$query3);
			
			$query4 = "SELECT * FROM testtable"; // gets everything in the table and returns it as a mysqli_result object if SELECT, SHOW, DESCRIBE or EXPLAIN is used, there may be more cases than these where it returns a mysqli_result object.
			$results = mysqli_query($link,$query4); // restults is the mysqli_result object
			$row = mysqli_fetch_row($results); // everytime fetch row is used, it returns the next row, this returns the first row
			$row2 = mysqli_fetch_row($results); // this returns the second row
			echo $row[0] . "</br>" . $row2[0] . "</br>";
		}
		echo mysqli_get_server_info($link) . "\n";
		mysqli_close($link);
		?>
	</head>
</html>
