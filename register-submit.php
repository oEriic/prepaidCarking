// source: https://www.youtube.com/watch?v=QxZxHUf7c_0&t=0s

<?php
  session_start();
  include "dbconnect.php";

  if (isset($_POST['name']) && isset($_POST['username']) && isset($_POST['password']) && isset($_POST['confirm_password'])){

    function validate($data){
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }

    $name = validate($_POST['name']);
    $user = validate($_POST['username']);
    $pass = validate($_POST['password']);
    $conf_pass = validate($_POST['confirm_password']);

    if(empty($name)){
      header("Location: register.php?empty=* Name is required *");
      exit();
    } else if (empty($user)){
      header("Location: register.php?empty=* Username is required *");
      exit();
    } else if (empty($pass)){
      header("Location: register.php?empty=* Password is required *");
      exit();
    } else if (empty($conf_pass)){
        header("Location: register.php?empty=* Confirm Password is required *");
        exit();
      } else if ($pass !== $conf_pass){
        header("Location: register.php?empty=* Confirm Password does not match the Password *");
        exit();
      } else{

        $sql = "SELECT * FROM users WHERE Username='$user'";

        $result = mysqli_query($r, $sql);

        if (mysqli_num_rows($result) > 0){
          header("Location: register.php?empty=* That Username is already taken. Please try again *");
          exit();
        } else{
          $sql2 = "INSERT INTO users(Username, Password, Name) VALUES('$user', '$pass', '$name')";
          $result2 = mysqli_query($r, $sql2);

          if ($result2){
            echo "<script> alert('You have been registered! Please log in now');
            window.location.replace('./login.php');
            </script>";
         exit();
       } else{
         header("Location: register.php?empty=* Error has occured. Please try again *");
         exit();
       }
     }
   }
 } else{
   header("Location: register.php");
   exit();
 }

?>
