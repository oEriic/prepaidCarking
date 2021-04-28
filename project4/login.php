<html>
  <head>
    <title> Log in </title>
    <link rel = "stylesheet" href = "login.css">
  </head>

  <body>
    <form action = "login-submit.php" method = "post">

      <h1> Login! </h1>

      <?php if (isset($_GET['empty'])) { ?>
     		<div class = "empty"> <?php echo $_GET['empty']; ?> </div>
     	<?php } ?>

      <label> Username </label>
      <input type = "text" name = "username" placeholder = "Please Enter Username"> <br>

      <label> Password </label>
      <input type = "text" name = "password" placeholder = "Please Enter Password"> <br>
      <button type = "submit"> Login </button> <br>

      <a href = "register.php" class = "link"> Need to Register? </a>
    </form>
  </body>
</html>
