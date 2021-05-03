<!DOCTYPE html>

<html>

<head>
    <title>Rent-A-Car</title>
    <link rel="stylesheet" href="rental.css">
    <script src="rentalScript.js"></script>
</head>

<body>
    <div class = "navBar">
        <ul>
            <li><a href="index.html">Index</a></li>
            <li><a href="homepage.php">Homepage</a></li>
            <li><a href="PrePaidParking.php">PrePaid Parking</a></li>
        </ul>
    </div>
    </br>
    </br>
    </br>
    <!--Slide show provided by W3Schools -->
    <!-- Container for the image gallery -->
    <div class="container">

        <!-- Full-width images with number text -->
        <div class="mySlides">
            <div class="numbertext">1 / 10</div>
            <a href = "carDetailPage.php?carID=5" onclick="post">
                <img class="center" src="carPics/audiCar.jpg" alt="Audi" style="width:600px; height:500px">
            </a>
        </div>

        <div class="mySlides">
            <div class="numbertext">2 / 10</div>
            <a href = "carDetailPage.php?carID=6" onclick="post">
                <img class="center" src="carPics/bigmoneySUV.jpg" alt="Best SUV" style="width:600px; height:500px">
            </a>
        </div>

        <div class="mySlides">
            <div class="numbertext">3 / 10</div>
            <a href = "carDetailPage.php?carID=7" onclick="post">
                <img class="center" src="carPics/bigVan.jpg" alt="Candy Van" style="width:600px; height:500px">
            </a>
        </div>

        <div class="mySlides">
            <div class="numbertext">4 / 10</div>
            <a href = "carDetailPage.php?carID=3" onclick="post">
                <img class="center" src="carPics/hondaCivic.jpg" alt="Classic" style="width:600px; height:500px">
            </a>
        </div>

        <div class="mySlides">
            <div class="numbertext">5 / 10</div>
            <a href = "carDetailPage.php?carID=8" onclick="post">
                <img class="center" src="carPics/jeep.jpg" alt="BeepJeep" style="width:600px; height:500px">
            </a>
        </div>

        <div class="mySlides">
            <div class="numbertext">6 / 10</div>
            <a href = "carDetailPage.php?carID=10" onclick="post">
                <img class="center" src="carPics/limo.png" alt="limooooo" style="width:600px; height:500px">
            </a>
        </div>

        <div class="mySlides">
            <div class="numbertext">7 / 10</div>
            <a href = "carDetailPage.php?carID=4" onclick="post">
                <img class="center" src="carPics/moneyCar.jpg" alt="lightning" style="width:600px; height:500px">
            </a>
        </div>

        <div class="mySlides">
            <div class="numbertext">8 / 10</div>
            <a href = "carDetailPage.php?carID=1" onclick="post">
                <img class="center" src="carPics/pattyWagon.jpg" alt="Man's Car" style="width:600px; height:500px">
            </a>
        </div>

        <div class="mySlides">
            <div class="numbertext">9 / 10</div>
            <a href = "carDetailPage.php?carID=2" onclick="post">
                <img class="center" src="carPics/smartCar.jpg" alt="smollVroomer" style="width:600px; height:500px">
            </a>
        </div>

        <div class="mySlides">
            <div class="numbertext">10 / 10</div>
            <a href = "carDetailPage.php?carID=9" onclick="post">
                <img class="center" src="carPics/toyotaVan.jpg" alt="noice" style="width:600px; height:500px">
            </a>
        </div>


        <!-- Next and previous buttons -->
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>

        <!-- Image text -->
        <div class="caption-container">
            <p id="caption"></p>
        </div>

        <!-- Thumbnail images -->
        <div class="row">
            <div class="column">
                <img src="carPics/audiCar.jpg" style="width:50%" onclick="currentSlide(1)" alt="Iron Man?">
            </div>
            <div class="column">
                <img src="carPics/bigmoneySUV.jpg" style="width:50%" onclick="currentSlide(2)" alt="looks Clean">
            </div>
            <div class="column">
                <img src="carPics/bigVan.jpg" style="width:50%" onclick="currentSlide(3)" alt="Free Candy">
            </div>
            <div class="column">
                <img src="carPics/hondaCivic.jpg" style="width:50%" onclick="currentSlide(4)" alt="New One is Cool">
            </div>
            <div class="column">
                <img  src="carPics/jeep.jpg" style="width:50%" onclick="currentSlide(5)" alt="Jeep Beep">
            </div>
            <div class="column">
                <img src="carPics/limo.png" style="width:50%" onclick="currentSlide(6)" alt="Prom Night">
            </div>
            <div class="column">
                <img src="carPics/moneyCar.jpg" style="width:50%" onclick="currentSlide(7)" alt="A baller's car">
            </div>
            <div class="column">
                <img src="carPics/pattyWagon.jpg" style="width:50%" onclick="currentSlide(8)" alt="For the REAL Squares">
            </div>
            <div class="column">
                <img src="carPics/smartCar.jpg" style="width:50%" onclick="currentSlide(9)" alt="Small Vroomer">
            </div>
            <div class="column">
                <img src="carPics/toyotaVan.jpg" style="width:50%" onclick="currentSlide(10)" alt="soccer Van">
            </div>
        </div>
    </div>
</body>

</html>