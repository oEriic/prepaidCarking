
<html>

<head>
    <title>Car Detail</title>
    <link rel="stylesheet" href="carDetail.css">
    <script src="detailScript.js"></script>
</head>

<body>

    <div class="mainContainer">
        <!--PHPDBCOnnect Stuff-->
        <?php
            $mysqli = new mysqli("localhost", "root", "1111", "cardb");
            $id = $_GET['carID'];

            $query = "SELECT * FROM 'cardb.carlist' WHERE 'id'=$id";
            
            
            echo '<table border="0" cellspacing="2" cellpadding="2"> 
            <tr> 
                <td> <font face="Arial">Value1</font> </td> 
                <td> <font face="Arial">Value2</font> </td> 
                <td> <font face="Arial">Value3</font> </td> 
                <td> <font face="Arial">Value4</font> </td> 
                <td> <font face="Arial">Value5</font> </td> 
            </tr>';
            if($carInfo = $mysqli -> query($query)){
                while($row = $carInfo->fetch_assoc()){
                    $field1name = $row["col1"];
                    $field2name = $row["col2"];
                    $field3name = $row["col3"];
                    $field4name = $row["col4"];
                    $field5name = $row["col5"];
                    echo '<tr>
                            <td>'.$field1name.'</td>
                            <td>'.$field2name.'</td>
                            <td>'.$field3name.'</td>
                            <td>'.$field4name.'</td>
                            <td>'.$field5name.'</td>
                        </tr>';
                }
                $retsult->free();
                
            }
            
            //echo "<img class=\"carPic\" src=\"carPics/pattyWagon.jpg\" style=\"width:600px; height:500px\">"
        ?>
        <img class="carPic" src="carPics/pattyWagon.jpg" style="width:600px; height:500px">
        <div class="statBox">
            <h2>NAMEOFCARHERE</h2>
            <div>
                <h3>Model</h3>
                <p>Model of Car</p>
                <h3>Price: </h3>
                <p>PRICE</p>
                <h3>Type:</h3>
                <p>SUVSPORTETC</p>
            </div>
        </div>
    </div>
</body>

</html>