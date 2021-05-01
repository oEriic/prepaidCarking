//source: https://www.youtube.com/watch?v=JDn6OAMnJwQ

<?php
  session_start();
  include "dbconnect.php";

  if (isset($_POST['username']) && isset($_POST['password'])){

    function validate($data){
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }

    $user = validate($_POST['username']);
    $pass = validate($_POST['password']);

    if (empty($user)){
      header("Location: login.php?empty=* Username is required *");
      exit();
    } else if (empty($pass)){
      header("Location: login.php?empty=* Password is required *");
      exit();
    } else{
      $sql = "SELECT * FROM users WHERE Username='$user' AND Password='$pass'";

      $result = mysqli_query($r, $sql);

      if (mysqli_num_rows($result) === 1){
        $row = mysqli_fetch_assoc($result);
        if ($row['Username'] === $user && $row['Password'] === $pass){
          $_SESSION['Username'] = $row['Username'];
          $_SESSION['Name'] = $row['Name'];
          $_SESSION['ID'] = $row['ID'];
          header("Location: homepage.php");
          exit();
        }
      } else{
        header("Location: login.php?empty=* Username/Password is incorrect *");
        exit();
      }
    }
  } else{
    header("Location: login.php");
    exit();
  }

?>
