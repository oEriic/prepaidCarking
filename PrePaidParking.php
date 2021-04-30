<!DOCTYPE HTML>
<html lang = "en">
	<head>
		<meta charset = "UTF-8"/>
		<title>Prepaid Carking</title> <!-- Citations: https://www.php.net/manual/en/mysqli-result.fetch-row.php 
		https://www.php.net/manual/en/mysqli.query.php https://www.php.net/manual/en/function.mysqli-connect.php  https://www.php.net/manual/en/mysqli.connect-error.php -->
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
			$query = "CREATE TABLE testtable2(
			nums INTEGER PRIMARY KEY,
			names VARCHAR(50)
			)
			"; //You can check http://localhost/phpmyadmin/ to see if tables are created, nums is column 1, names is column 2
			$succeed = mysqli_query($link,$query); //returns false if failed
			if(!$succeed){
				echo "not created</br>";// won't create another table if one with this name is already there, I think 
			}
			else{
				echo "table created</br>";
			}
			
			$query2 = "INSERT INTO testtable2
						VALUES (12345,\"sfdg\");
			"; //first argument in values is for first column, second one is for second column
			
			mysqli_query($link,$query2);
			
			$query3 = "INSERT INTO testtable2
						VALUES (123456,\"sfdgs\");
			";
			
			mysqli_query($link,$query3);
			
			$query4 = "SELECT * FROM testtable2"; // gets everything in the table and returns it as a mysqli_result object if SELECT, SHOW, DESCRIBE or EXPLAIN is used, there may be more cases than these where it returns a mysqli_result object.
			$results = mysqli_query($link,$query4); // restults is the mysqli_result object
			$row = mysqli_fetch_row($results); // everytime fetch row is used, it returns the next row as array, this returns the first row as array
			$row2 = mysqli_fetch_row($results); // this returns the second row as array
			echo $row[0] . "</br>" . $row[1] . "</br>";
			echo $row2[0] . "</br>" . $row2[1] . "</br>";
		}
		echo mysqli_get_server_info($link) . "\n"; // returns server infor
		mysqli_close($link); // closes connection
		?>
	</head>
</html>
