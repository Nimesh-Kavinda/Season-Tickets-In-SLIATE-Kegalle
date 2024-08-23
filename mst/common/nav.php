<?php
session_start();
// include_once '../db.php';
$status = htmlspecialchars(strip_tags(trim($_SESSION['val'])), ENT_QUOTES, 'UTF-8');
$pos = htmlspecialchars(strip_tags(trim($_SESSION['pos'])), ENT_QUOTES, 'UTF-8');



?>
<header>
    <div class="nav-wrapper">
        <div class="logo-container">
            <b class = "nav-title"><p>SLIATE - KEGALLE</p></b>
        </div>
        <nav>
            <input class="hidden" type="checkbox" id="menuToggle">
            <label class="menu-btn" for="menuToggle">
            
                <div class="menu">
                </div>
                <div class="menu"></div>
            </label>
            <div class="nav-container">
                <ul class="nav-tabs">
                    <li class="nav-tab white"><a href="./home.php">Home</a></li>
                    <li class="nav-tab blue" ><a href="./booking.php">Booking</a></li>
                    <li class="nav-tab white"><a href="./about.php">About Us</a></li>
                    <li class="nav-tab red"><a href="./distroy.php">Log Out</a></li>
                    <?php if ($pos == 'ref') { ?>
                    <li class="nav-tab white"><a href="./tabel.php">Reg.Details</a></li>
                    <li class="nav-tab blue"><a href="./payment_tabel.php">Pay.Details</a></li>
                    <li class="nav-tab white"><a href="./feedback.php">Feedback</a></li>
                    <?php } ?>
                    
                </ul>
            </div>
        </nav>
    </div>
</header>
