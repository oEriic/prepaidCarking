<?php
session_start();

if (isset($_SESSION['ID']) && isset($_SESSION['Username'])) {

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>HOME</title>
</head>
<body>
     <h1>Welcome, <?php echo $_SESSION['Name']; ?></h1>
</body>
</html>

<?php
}else{
     header("Location: index.php");
     exit();
}
 ?>
