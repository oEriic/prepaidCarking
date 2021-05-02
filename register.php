<html>
  <head>
    <title> Register! </title>
    <link rel = "stylesheet" href = "login.css">
  </head>

  <body>
    <form action = "register-submit.php" method = "post">

      <h1> Register! </h1>
      <?php if (isset($_GET['empty'])) { ?>
     		<p class = "empty"> <?php echo $_GET['empty']; ?> </p>
     	<?php } ?>
      <label> Name </label>
      <input type = "text" name = "name" placeholder = "Please Enter Name"> <br>
      <label> Username </label>
      <input type = "text" name = "username" placeholder = "Please Enter Username"> <br>
      <label> Password </label>
      <input type = "text" name = "password" placeholder = "Please Enter Password"> <br>
      <label> Confirm Password </label>
      <input type = "text" name = "confirm_password" placeholder = "Please Enter Confirm Password"> <br>
      <button type = "submit"> Register </button> <br>

      <a href = "login.php" class = "link"> Go back to log in </a>
    </form>
  </body>

</html>
