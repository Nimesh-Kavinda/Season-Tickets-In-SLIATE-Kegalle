<?php
include "function/db.php";
session_start();
$id = htmlspecialchars(trim($_SESSION['id']), ENT_QUOTES, 'UTF-8');
$pos = htmlspecialchars(trim($_SESSION['pos']), ENT_QUOTES, 'UTF-8');

$tcost = htmlspecialchars(trim($_POST['tcost']));

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Payment Form</title>
  <link rel="stylesheet" href="css/booking.css">
  <link rel="stylesheet" href="common/nav.css">
</head>

<body>

  <?php
  $cost_con = floatval($tcost);
  $total = $cost_con * 12.6;

  ?>

  <div class="wrapper">
    <h2>Payment Form</h2>
    <form action="balance.php" method="post">
      <p> Your Cost</p>
      <div class="input-box">
        <input type="text" id="cost" name="cost" value="<?php echo $total ?>" required readonly>
      </div>

      <p> Your Cordinator</p>
      <?php 
      $sql = mysqli_query($conn, "SELECT cordinator FROM registration WHERE id = '$id'");
      $row = mysqli_fetch_array($sql);
      ?>
      <div class="input-box">
        <input type="text" id="codinator" name="codinator" value="<?php echo $row['cordinator'] ;?>" required readonly>
      </div>

      <p> Your payment</p>
      <div class="input-box">
        <input type="text" id="price" name="price" required>
      </div>

      <div class="input-box button">
        <input type="Submit" value="Book Now" >
      </div>

</body>

</html>