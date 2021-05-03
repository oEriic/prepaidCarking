<?php
session_start();

if (isset($_SESSION['ID']) && isset($_SESSION['Username'])) {

?>

<!DOCTYPE html>
<html lang = "en">
<head>
	<meta charset = "UTF-8"/>
	<title>User Profile</title>
	<link rel="stylesheet" href="project4.css">
</head>
<body>
	<h1><?php echo $_SESSION['Name']; ?>'s History</h1>

<?php
}else{
     header("Location: index.php");
     exit();
}
?>


<?php
	echo "<h3>Pre-Paid Parking</h3>";
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
		$sql = 'SELECT * FROM PurchasedSpacesFinal';
		$result = $link->query($sql);
		echo "<table>";
		$totalcost1=0;
		if($result->num_rows > 0){
			while($row = $result->fetch_assoc()){//displays parking info history
				$totalcost1 += $row['SpacePrice'];
				echo "<tr><td><b> SpaceName : </b>". $row["SpaceName"] . "</td><td><b>SpaceHours: </b>" . $row['SpaceHours'] ."</td><td><b>SpacePrice: $</b>" . $row['SpacePrice'] . "</td></tr>";
			}
		}
		else{
			echo "Empty Cart";
		}
		echo "</table>";
		echo "<br>";
		echo "Total: $".$totalcost1 . "<br>";


	}


	mysqli_close($link); // closes connection
?>

<?php
	echo "<br><h3>Rental Car</h3>";
	$host = "localhost";
	$user = "root";
	$pass = ""; //If you set a password for the sql server, put it here, otherwise the xampp sql server should have no password for the root user by default, so it would be blank
	$db = "cardb"; //Name of the database that the created tables are inserted into, seems like there is already a database named "mysql" in xampp by defualt, you can check http://localhost/phpmyadmin/
	@ $link = mysqli_connect($host, $user, $pass, $db); //returns false if failed
	if (!$link){
		echo "Could not connect to server</br>";
		trigger_error(mysqli_connect_error(), E_USER_ERROR);
	} 

	//else loop needs to be edited to display rental car database info
	else{
		$totalcost2=0;
		$tag = $_SESSION['ID'];
		$sql = "SELECT name,cost FROM cardb.carlist WHERE idCar=$tag";
		 if($carInfo = $link -> query($sql)){
                while($row = $carInfo->fetch_assoc()){
                    $field1name = $row["name"];
                    $field2name = $row["cost"];
                    $totalcost2 += $row["cost"];
                 
                    echo "<b>Name: </b>".$field1name."<b>&nbsp&nbsp&nbsp&nbspCost: </b>".$field2name;  
              
                }

                $carInfo->free();
                
            }

         else{
           	echo "Empty Cart";
         }

        echo "<br><br>Total: $".$totalcost2 . "<br>";

	}


	mysqli_close($link); // closes connection
?>

<?php
	echo "<h3>Overall Cost</h3>";
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
		$total= $totalcost1+$totalcost2;
		echo "Total: $" . $total ."<br>";
	}
	mysqli_close($link); // closes connection
?>

<br>
			
<br>
<a href = "homepage.php">Back to homepage</a>
</body>
</html>