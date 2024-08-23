<?php 
include "function/db.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Monthly Season Tickets - ATI Kegalle</title>
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="css/tabel.css">
    <link rel="stylesheet" href="common/nav.css">
    <link rel="stylesheet" href="common/fotter.css">

</head>
<body>
   <!-- nav start -->
   <?php 
   include 'common/nav.php';
   ?>
   <!-- end nav -->

   <div class="logoati">
    <img src="images/logo1.png" width="200px" height="140px">
    <h1>
        <p> DEPARTMENT </p>
        <p> OF </p>
        <p class="T1"> INFORMATION TECHNOLOGY </p>
    </h1>
    <br>
    <h2>Monthly Season Tickets</h2>
</div>
<!-- End of Topic -->
<br>

<!-- Start of Description -->
<div class="container1">
    <img class="picture" src="images/ATI 05.jpg" onclick="openFullImg(this.src)">
    <div class="text">
        <h1>Hello, 2k22 IT Students,</h1>
        <br>
        <p>As you all know we are facing a lot of problems in getting our monthly season tickets.</p>
        <br>
        <p>As a few of them,
            <br><br>
            <ul>
                <li>Minor problems in the handling of money.</li>
                <li>Difficulties in returning the remaining money due to overcrowding.</li>
                <li>The task of this process is very time-consuming.</li>
                <li>The educational loss caused by missing lectures for those who spend their time.</li>
            </ul>
            <br>
            can be briefly mentioned as the main problems.</p>
        <br>
        <p>So we have created this website to provide the most appropriate solutions to the problems we mentioned earlier
            in getting the monthly term papers and for the convenience of all of you.</p>
        <br>
        <p>We hope this will give you some comfort and mainly help to lighten the responsibility of our badge ref and ref
            on the day.</p>
    </div>
</div>
<!-- End of Description -->

<div class="space2"></div>

<!-- Start of Photo Gallery -->
<div class="p2">
    <div class="h2">
        <h3 class ="ati_topic">Advance Technology Institute-Kegalle</h3>
    </div>
    <div class="full-img" id="fullImgBox">
        <img src="a.jpg" id="fullImg">
        <span onclick="closeFullImg()">x</span>
    </div>
    <div class="img-gallery">
        <img src="images/ATI 01.jpg" onclick="openFullImg(this.src)">
        <img src="images/ATI 05.jpg" onclick="openFullImg(this.src)">
        <img src="images/ATI 03.jpg" onclick="openFullImg(this.src)">
        <img src="images/ATI 01.jpg" onclick="openFullImg(this.src)">
        <img src="images/ATI 06.jpg" onclick="openFullImg(this.src)">
        <img src="images/ATI 07.jpg" onclick="openFullImg(this.src)">
        <img src="images/ATI 08.jpg" onclick="openFullImg(this.src)">
        <img src="images/ATI 09.jpg" onclick="openFullImg(this.src)">
        
    </div>
</div>
<!-- End of Photo Gallery -->
   
   <!-- footer -->
   <!-- end of fotter -->

   <?php 
   include 'common/fotter.php';
   ?>

<script src="js/home.js"></script>
</body>
</html>