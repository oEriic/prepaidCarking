<?php
session_start();

if (isset($_SESSION['ID']) && isset($_SESSION['Username'])) {

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>HOME</title>
	<link rel="stylesheet" href="project4.css" />
</head>
<body>
    <h1>Welcome, <?php echo $_SESSION['Name']; ?></h1>
    <div id=navigation>
    	<div class=col>
    		<a href="user.php"><img src="user.png"></a>
    	</div>
    	<div class=col>
    		<a href="#cart.php"><img src="cart.jpg"></a>
    	</div>
	</div>
   	<main>
   		<aside id=left>
    		<a href="PrePaidParking.php"><img src="parkingspace.jpg"></a>
    		PrePaid Parking
 		</aside>
    	<aside id=right>
    	 	<a href="rentalcar.php"><img src="carrent.jpg"></a>
    	 	Car Rental
		</aside>
	</main>
</body>
</html>

<?php
}else{
     header("Location: index.php");
     exit();
}
 ?>

