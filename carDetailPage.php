<?php
session_start();

?>
<html>
<!--Citation: https://www.braemoor.co.uk/software/creditcard.shtml-->
<head>
    <title>Car Detail</title>
    <link rel="stylesheet" href="carDetail.css">
    <script src="detail.js"></script>
</head>

<body>

    <div class="mainContainer">
        <!--PHPDBCOnnect Stuff-->
        <?php
            $mysqli = new mysqli("localhost", "root", "1111", "cardb");
            $id = $_REQUEST['carID'];
            $_SESSION['ID']=$id;
           
            $query = "SELECT * FROM cardb.carlist WHERE idCar=$id";
            if($carInfo = $mysqli -> query($query)){
                while($row = $carInfo->fetch_assoc()){
                    $field1name = $row["model"];
                    $field2name = $row["carType"];
                    $field3name = $row["carImg"];
                    $field4name = $row["cost"];
                    $field5name = $row["name"];
                    
                    echo "<img class=\"carPic\" src=\"".$field3name."\" style=\"width:600px; height:500px\">";
                    echo "
                    <div class=\"statBox\">
                        <h2>".$field5name."</h2>
                        <div>
                            <h3>Model</h3>
                            <p>".$field1name."</p>
                            <h3>Price: </h3>
                            <p>$".$field4name." Per Day</p>
                            <h3>Type:</h3>
                            <p>".$field2name."</p>
                        </div>
                    </div>";
                }

                $carInfo->free();
                
            }
            
        ?>
        <button onclick="checkout()">Rent Me!</button>

    </div>

</body>

</html>

