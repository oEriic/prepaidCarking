<!DOCTYPE HTML>
<html lang = "en">
	<head>
		<meta charset = "UTF-8"/>
		<title>Prepaid Carking</title> <!-- Citations: https://www.php.net/manual/en/mysqli-result.fetch-row.php 
		https://www.php.net/manual/en/mysqli.query.php https://www.php.net/manual/en/function.mysqli-connect.php  https://www.php.net/manual/en/mysqli.connect-error.php -->
		<link rel="stylesheet" href="PrePaidParkingStyles.css">
	</head>
	<body>
		<div>
			<h1>Available Parking:</h1>
		</div>
		<div>
			<h4>(Green spaces are available, grey spaces are unavailable, and blue spaces are already added to your purchase.)</h4>
		</div>
		<div>
			<h2>Regular parking: $12/hour | VIP parking: $24/hour</h2>
		</div>
		<form action = "PrePaidParkingSubmit.php" method = "POST">
			<div>
				<table>
					<tr>
						<td id = "leftparking"><label><input type = "checkbox" name = "prkA1" value = "A1"/>A1</label></td><td id = "rightparking"><label><input type = "checkbox" name = "prkB1" value = "B1"/>B1</label></td>
					</tr>
					<tr>
						<td id = "leftparking"><label><input type = "checkbox" name = "prkA2" value = "A2"/>A2</label></td><td id = "rightparking"><label><input type = "checkbox" name = "prkB2" value = "B2"/>B2</label></td>
					</tr>
					<tr>
						<td id = "leftparking"><label><input type = "checkbox" name = "prkA3" value = "A3"/>A3</label></td><td id = "rightparking"><label><input type = "checkbox" name = "prkB3" value = "B3"/>B3</label></td>
					</tr>
					<tr>
						<td id = "leftparking"><label><input type = "checkbox" name = "prkA4" value = "A4"/>A4</label></td><td id = "rightparking"><label><input type = "checkbox" name = "prkB4" value = "B4"/>B4</label></td>
					</tr>
					<tr>
						<td id = "leftparking"><label><input type = "checkbox" name = "prkA5" value = "A5"/>A5</label></td><td id = "rightparking"><label><input type = "checkbox" name = "prkB5" value = "B5"/>B5</label></td>
					</tr>
					<tr>
						<td id = "leftparking"><label><input type = "checkbox" name = "prkA6" value = "A6"/>A6</label></td><td id = "rightparking"><label><input type = "checkbox" name = "prkB6" value = "B6"/>B6</label></td>
					</tr>
					<tr>
						<td id = "leftparking"><label><input type = "checkbox" name = "prkA7" value = "A7"/>A7</label></td><td id = "rightparking"><label><input type = "checkbox" name = "prkB7" value = "B7"/>B7</label></td>
					</tr>
					<tr>
						<td id = "leftparking"><label><input type = "checkbox" name = "prkA8" value = "A8"/>A8</label></td><td id = "rightparking"><label><input type = "checkbox" name = "prkB8" value = "B8"/>B8</label></td>
					</tr>
					<tr>
						<td id = "leftparking"><label><input type = "checkbox" name = "prkA9" value = "A9"/>A9</label></td><td id = "rightparking"><label><input type = "checkbox" name = "prkB9" value = "B9"/>B9</label></td>
					</tr>
					<tr>
						<td id = "leftparking"><label><input type = "checkbox" name = "prkA10" value = "A10"/>A10</label></td><td id = "rightparking"><label><input type = "checkbox" name = "prkB10" value = "B10"/>B10</label></td>
					</tr>
					<tr>
						<td id = "leftparking"><label><input type = "checkbox" name = "prkA11" value = "A11"/>A11</label></td><td id = "rightparking"><label><input type = "checkbox" name = "prkB11" value = "B11"/>B11</label></td>
					</tr>
					<tr>
						<td id = "leftparking"><label><input type = "checkbox" name = "prkA12" value = "A12"/>A12</label></td><td id = "rightparking"><label><input type = "checkbox" name = "prkB12" value = "B12"/>B12</label></td>
					</tr>
				</table>
				<div id = "space">
				</div>
				<table>
					<tr>
						<td id = "leftparking"><label><input type = "checkbox" name = "prkC1" value = "C1"/>C1</label></td><td id = "rightparking"><label><input type = "checkbox" name = "prkD1" value = "D1"/>D1</label></td>
					</tr>
					<tr>
						<td id = "leftparking"><label><input type = "checkbox" name = "prkC2" value = "C2"/>C2</label></td><td id = "rightparking"><label><input type = "checkbox" name = "prkD2" value = "D2"/>D2</label></td>
					</tr>
					<tr>
						<td id = "leftparking"><label><input type = "checkbox" name = "prkC3" value = "C3"/>C3</label></td><td id = "rightparking"><label><input type = "checkbox" name = "prkD3" value = "D3"/>D3</label></td>
					</tr>
					<tr>
						<td id = "leftparking"><label><input type = "checkbox" name = "prkC4" value = "C4"/>C4</label></td><td id = "rightparking"><label><input type = "checkbox" name = "prkD4" value = "D4"/>D4</label></td>
					</tr>
					<tr>
						<td id = "leftparking"><label><input type = "checkbox" name = "prkC5" value = "C5"/>C5</label></td><td id = "rightparking"><label><input type = "checkbox" name = "prkD5" value = "D5"/>D5</label></td>
					</tr>
					<tr>
						<td id = "leftparking"><label><input type = "checkbox" name = "prkC6" value = "C6"/>C6</label></td><td id = "rightparking"><label><input type = "checkbox" name = "prkD6" value = "D6"/>D6</label></td>
					</tr>
					<tr>
						<td id = "leftparking"><label><input type = "checkbox" name = "prkC7" value = "C7"/>C7</label></td><td id = "rightparking"><label><input type = "checkbox" name = "prkD7" value = "D7"/>D7</label></td>
					</tr>
					<tr>
						<td id = "leftparking"><label><input type = "checkbox" name = "prkC8" value = "C8"/>C8</label></td><td id = "rightparking"><label><input type = "checkbox" name = "prkD8" value = "D8"/>D8</label></td>
					</tr>
					<tr>
						<td id = "leftparking"><label><input type = "checkbox" name = "prkC9" value = "C9"/>C9</label></td><td id = "rightparking"><label><input type = "checkbox" name = "prkD9" value = "D9"/>D9</label></td>
					</tr>
					<tr>
						<td id = "leftparking"><label><input type = "checkbox" name = "prkC10" value = "C10"/>C10</label></td><td id = "rightparking"><label><input type = "checkbox" name = "prkD10" value = "D10"/>D10</label></td>
					</tr>
					<tr>
						<td id = "leftparking"><label><input type = "checkbox" name = "prkC11" value = "C11"/>C11</label></td><td id = "rightparking"><label><input type = "checkbox" name = "prkD11" value = "D11"/>D11</label></td>
					</tr>
					<tr>
						<td id = "leftparking"><label><input type = "checkbox" name = "prkC12" value = "C12"/>C12</label></td><td id = "rightparking"><label><input type = "checkbox" name = "prkD12" value = "D12"/>D12</label></td>
					</tr>
				</table>
				<div id = "space">
				</div>
				<table>
					<tr>
						<td id = "leftparking"><label><input type = "checkbox" name = "prkE1" value = "E1"/>E1</label></td><td id = "rightparking"><label><input type = "checkbox" name = "prkF1" value = "F1"/>F1</label></td>
					</tr>
					<tr>
						<td id = "leftparking"><label><input type = "checkbox" name = "prkE2" value = "E2"/>E2</label></td><td id = "rightparking"><label><input type = "checkbox" name = "prkF2" value = "F2"/>F2</label></td>
					</tr>
					<tr>
						<td id = "leftparking"><label><input type = "checkbox" name = "prkE3" value = "E3"/>E3</label></td><td id = "rightparking"><label><input type = "checkbox" name = "prkF3" value = "F3"/>F3</label></td>
					</tr>
					<tr>
						<td id = "leftparking"><label><input type = "checkbox" name = "prkE4" value = "E4"/>E4</label></td><td id = "rightparking"><label><input type = "checkbox" name = "prkF4" value = "F4"/>F4</label></td>
					</tr>
					<tr>
						<td id = "leftparking"><label><input type = "checkbox" name = "prkE5" value = "E5"/>E5</label></td><td id = "rightparking"><label><input type = "checkbox" name = "prkF5" value = "F5"/>F5</label></td>
					</tr>
					<tr>
						<td id = "leftparking"><label><input type = "checkbox" name = "prkE6" value = "E6"/>E6</label></td><td id = "rightparking"><label><input type = "checkbox" name = "prkF6" value = "F6"/>F6</label></td>
					</tr>
					<tr>
						<td id = "leftparking"><label><input type = "checkbox" name = "prkE7" value = "E7"/>E7</label></td><td id = "rightparking"><label><input type = "checkbox" name = "prkF7" value = "F7"/>F7</label></td>
					</tr>
					<tr>
						<td id = "leftparking"><label><input type = "checkbox" name = "prkE8" value = "E8"/>E8</label></td><td id = "rightparking"><label><input type = "checkbox" name = "prkF8" value = "F8"/>F8</label></td>
					</tr>
					<tr>
						<td id = "leftparking"><label><input type = "checkbox" name = "prkE9" value = "E9"/>E9</label></td><td id = "rightparking"><label><input type = "checkbox" name = "prkF9" value = "F9"/>F9</label></td>
					</tr>
					<tr>
						<td id = "leftparking"><label><input type = "checkbox" name = "prkE10" value = "E10"/>E10</label></td><td id = "rightparking"><label><input type = "checkbox" name = "prkF10" value = "F10"/>F10</label></td>
					</tr>
					<tr>
						<td id = "leftparking"><label><input type = "checkbox" name = "prkE11" value = "E11"/>E11</label></td><td id = "rightparking"><label><input type = "checkbox" name = "prkF11" value = "F11"/>F11</label></td>
					</tr>
					<tr>
						<td id = "leftparking"><label><input type = "checkbox" name = "prkE12" value = "E12"/>E12</label></td><td id = "rightparking"><label><input type = "checkbox" name = "prkF12" value = "F12"/>F12</label></td>
					</tr>
				</table>
				<div id = "space">
				</div>
				<table>
					<tr>
						<td id = "leftparking"><label><input type = "checkbox" name = "prkG1" value = "G1"/>G1</label></td><td id = "rightparking"><label><input type = "checkbox" name = "prkH1" value = "H1"/>H1</label></td>
					</tr>
					<tr>
						<td id = "leftparking"><label><input type = "checkbox" name = "prkG2" value = "G2"/>G2</label></td><td id = "rightparking"><label><input type = "checkbox" name = "prkH2" value = "H2"/>H2</label></td>
					</tr>
					<tr>
						<td id = "leftparking"><label><input type = "checkbox" name = "prkG3" value = "G3"/>G3</label></td><td id = "rightparking"><label><input type = "checkbox" name = "prkH3" value = "H3"/>H3</label></td>
					</tr>
					<tr>
						<td id = "leftparking"><label><input type = "checkbox" name = "prkG4" value = "G4"/>G4</label></td><td id = "rightparking"><label><input type = "checkbox" name = "prkH4" value = "H4"/>H4</label></td>
					</tr>
					<tr>
						<td id = "leftparking"><label><input type = "checkbox" name = "prkG5" value = "G5"/>G5</label></td><td id = "rightparking"><label><input type = "checkbox" name = "prkH5" value = "H5"/>H5</label></td>
					</tr>
					<tr>
						<td id = "leftparking"><label><input type = "checkbox" name = "prkG6" value = "G6"/>G6</label></td><td id = "rightparking"><label><input type = "checkbox" name = "prkH6" value = "H6"/>H6</label></td>
					</tr>
					<tr>
						<td id = "leftparking"><label><input type = "checkbox" name = "prkG7" value = "G7"/>G7</label></td><td id = "rightparking"><label><input type = "checkbox" name = "prkH7" value = "H7"/>H7</label></td>
					</tr>
					<tr>
						<td id = "leftparking"><label><input type = "checkbox" name = "prkG8" value = "G8"/>G8</label></td><td id = "rightparking"><label><input type = "checkbox" name = "prkH8" value = "H8"/>H8</label></td>
					</tr>
					<tr>
						<td id = "leftparking"><label><input type = "checkbox" name = "prkG9" value = "G9"/>G9</label></td><td id = "rightparking"><label><input type = "checkbox" name = "prkH9" value = "H9"/>H9</label></td>
					</tr>
					<tr>
						<td id = "leftparking"><label><input type = "checkbox" name = "prkG10" value = "G10"/>G10</label></td><td id = "rightparking"><label><input type = "checkbox" name = "prkH10" value = "H10"/>H10</label></td>
					</tr>
					<tr>
						<td id = "leftparking"><label><input type = "checkbox" name = "prkG11" value = "G11"/>G11</label></td><td id = "rightparking"><label><input type = "checkbox" name = "prkH11" value = "H11"/>H11</label></td>
					</tr>
					<tr>
						<td id = "leftparking"><label><input type = "checkbox" name = "prkG12" value = "G12"/>G12</label></td><td id = "rightparking"><label><input type = "checkbox" name = "prkH12" value = "H12"/>H12</label></td>
					</tr>
				</table>
			</div>
			<div>
				<h1>Available VIP Parking:</h1>
			</div>
			<div>
				<table>
					<tr>
						<td id = "vip"><label><input type = "checkbox" name = "prkI1" value = "I1"/>I1</label></td>
					<tr>
				</table>
				<table>
					<tr>
						<td id = "vip"><label><input type = "checkbox" name = "prkI2" value = "I2"/>I2</label></td>
					<tr>
				</table>
				<table>
					<tr>
						<td id = "vip"><label><input type = "checkbox" name = "prkI3" value = "I3"/>I3</label></td>
					<tr>
				</table>
				<table>
					<tr>
						<td id = "vip"><label><input type = "checkbox" name = "prkI4" value = "I4"/>I4</label></td>
					<tr>
				</table>
				<table>
					<tr>
						<td id = "vip"><label><input type = "checkbox" name = "prkI5" value = "I5"/>I5</label></td>
					<tr>
				</table>
				<table>
					<tr>
						<td id = "vip"><label><input type = "checkbox" name = "prkI6" value = "I6"/>I6</label></td>
					<tr>
				</table>
				<table>
					<tr>
						<td id = "vip"><label><input type = "checkbox" name = "prkI7" value = "I7"/>I7</label></td>
					<tr>
				</table>
				<table>
					<tr>
						<td id = "vip"><label><input type = "checkbox" name = "prkI8" value = "I8"/>I8</label></td>
					<tr>
				</table>
				<table>
					<tr>
						<td id = "vip"><label><input type = "checkbox" name = "prkI9" value = "I9"/>I9</label></td>
					<tr>
				</table>
				<table>
					<tr>
						<td id = "vip"><label><input type = "checkbox" name = "prkI10" value = "I10"/>I10</label></td>
					<tr>
				</table>
				<table>
					<tr>
						<td id = "vip"><label><input type = "checkbox" name = "prkI11" value = "I11"/>I11</label></td>
					<tr>
				</table>
				<table>
					<tr>
						<td id = "vip"><label><input type = "checkbox" name = "prkI12" value = "I12"/>I12</label></td>
					<tr>
				</table>
				<table>
					<tr>
						<td id = "vip"><label><input type = "checkbox" name = "prkI13" value = "I13"/>I13</label></td>
					<tr>
				</table>
				<table>
					<tr>
						<td id = "vip"><label><input type = "checkbox" name = "prkI14" value = "I14"/>I14</label></td>
					<tr>
				</table>
				<table>
					<tr>
						<td id = "vip"><label><input type = "checkbox" name = "prkI15" value = "I15"/>I15</label></td>
					<tr>
				</table>
			</div>
			</br>
			</br>
			</br>
			<div>
				<input type = "submit" value = "CONFIRM SELECTION"/>
			</div>
		</form>
		</br>
		<div>
			<a href = "homepage.php">Back to homepage</a>
		</div>
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
			$query4 = "DROP TABLE PurchasedSpaces";
			mysqli_query($link,$query4);
			$query2 = "SELECT * FROM PurchasedSpacesFinal"; // gets everything in the table and returns it as a mysqli_result object if SELECT, SHOW, DESCRIBE or EXPLAIN is used, there may be more cases than these where it returns a mysqli_result object.
			$results = mysqli_query($link,$query2); // results is the mysqli_result object
			if(!$results){
				echo "<script>
					  var parkingspaces = document.getElementsByTagName(\"td\");
					 for(var x = 0; x <= parkingspaces.length-1; x++){
					  var decide = Math.random()*10;
					  if(decide <= 5){
						parkingspaces[x].style.backgroundColor = \"lightgreen\";
			          }
					  else{
						parkingspaces[x].innerHTML = parkingspaces[x].innerText;
						parkingspaces[x].style.backgroundColor = \"lightgrey\";
					  }
					}
					</script>";
			}
			else{
				echo "<script>
						  var parkingspaces = document.getElementsByTagName(\"td\");
						 for(var x = 0; x <= parkingspaces.length-1; x++){
						  var decide = Math.random()*10;
						  if(decide <= 5){
							parkingspaces[x].style.backgroundColor = \"lightgreen\";
						  }
						  else{
							parkingspaces[x].innerHTML = parkingspaces[x].innerText;
							parkingspaces[x].style.backgroundColor = \"lightgrey\";
						  }
						}
					  </script>";
				for($x = 1; $x <= mysqli_num_rows($results); $x++){
					$row = mysqli_fetch_row($results);
					echo "<script>
							var parkingspaces = document.getElementsByTagName(\"td\");
							for(var x = 0; x <= parkingspaces.length-1; x++){
								if(parkingspaces[x].innerText == " . "\"" . $row[0] . "\"" . "){
									parkingspaces[x].innerHTML = parkingspaces[x].innerText;
									parkingspaces[x].style.backgroundColor = \"lightblue\";
								}
							}
						  </script>";
				}
			}
		}
		mysqli_close($link); // closes connection
		?>		
	</body>
</html>