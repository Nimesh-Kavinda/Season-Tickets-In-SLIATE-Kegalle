<?php 
include "function/db.php";
session_start();
$id = htmlspecialchars(trim($_SESSION['id']), ENT_QUOTES, 'UTF-8');
$pos = htmlspecialchars(trim($_SESSION['pos']), ENT_QUOTES, 'UTF-8');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking</title>
    <link rel="stylesheet" href="css/details.css">
    <link rel="stylesheet" href="common/nav.css">
</head>
<body>


    <div class="wrapper">
      <?php 
      $row = mysqli_fetch_array(mysqli_query($conn, "SELECT * FROM registration WHERE id = $id"));

      ?>
        <h2>User Details - Check and Enter Your Cost</h2>
        <form action="payment.php" method="post">
            <p>Name</p>
          <div class="input-box">
            <input type="text" name="name" id="name" value="<?php echo $row['full_name'];?>" required readonly>
          </div>
          <p>index no</p>
          <div class="input-box">
            <input type="text" name="index" id="index" value="<?php echo $row['user_name']; ?>" required readonly>
          </div>
          <p>Address</p>
          <div class="input-box">
            <input type="text" id="address" name="address" value="<?php echo $row['address']; ?>" required readonly>
          </div>
          <p>Daily Root</p>
          <div class="input-box">
            <input type="text" name="droot" id="droot" value="<?php echo $row['droot']; ?>" required readonly>
          </div>
          <p>Cost of one Tour</p>
          <div class="input-box">
            <input type="text" placeholder="Enter your Cost" id="tcost" name="tcost" required>
          </div>

          <div class="input-box button">
            <input type="Submit" value="See Details" >
          </div>

          <script>


          </script>

</body>
</html>