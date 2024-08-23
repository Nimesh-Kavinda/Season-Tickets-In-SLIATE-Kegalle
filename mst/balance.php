<?php
include "function/db.php";
session_start();
$id = htmlspecialchars(trim($_SESSION['id']), ENT_QUOTES, 'UTF-8');
$pos = htmlspecialchars(trim($_SESSION['pos']), ENT_QUOTES, 'UTF-8');


$cost = htmlspecialchars(trim($_POST['cost']));
$codinator = htmlspecialchars(trim($_POST['codinator']));
$price = htmlspecialchars(trim($_POST['price']));

$cost_con = floatval($cost);
$price_con = floatval($price);
$balance = $price_con - $cost_con;

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Payment Verify</title>
  <link rel="stylesheet" href="css/booking.css">
  <link rel="stylesheet" href="common/nav.css">
</head>

<body>
  <div class="wrapper">

  <?php 
      $row = mysqli_fetch_array(mysqli_query($conn, "SELECT * FROM registration WHERE id = $id"));

      ?>

    <h2>Confirmation Form</h2>
    <form action="function/confirm_fun.php" method="post">

       <p>Name</p>
      <div class="input-box">
      <input type="text" name="name" id="name" value="<?php echo $row['full_name'];?>" required readonly>
      </div>

          <p> Your Payment</p>
      <div class="input-box">
        <input type="text" name="payment" id="payment" value="<?php echo $price_con; ?>" required readonly>
      </div>

      <p> Your Cost</p>
      <div class="input-box">
        <input type="text" name="y_cost" id="y_cost" value="<?php echo $cost_con; ?>" required readonly>
      </div>

      <p> Your Balance</p>
      <div class="input-box">
        <input type="text" name="balance" id="balance" value="<?php echo $balance; ?>" required readonly>
      </div>

      <p> Your Cordinator</p>
      <div class="input-box">
        <input type="text" id="codi" name="codi" value="<?php echo $codinator; ?>" required readonly>
      </div>

      <div class="paymsg">Note : Keep this page screenshot to claim your balance form your Cordinator</div>

      <div class="input-box button">
        <input type="Submit" value="Done">
      </div>
  </div>
</body>

</html>