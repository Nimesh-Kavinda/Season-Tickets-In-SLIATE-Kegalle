<?php
include "function/db.php";


?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registration Details</title>
  <link rel="stylesheet" href="css/tabel.css">
  <link rel="stylesheet" href="common/nav.css">

</head>

<body>
  <?php include "common/nav.php"; ?>
  
  <table>
    <caption>Payment Details</caption>
    <thead>
      <tr>
        <th>Index No</td>
        <th>Payment</td>
        <th>Cost</td>
        <th>Balance</td>
      </tr>
    </thead>
    <tbody>
      <?php
      $sql = "SELECT * FROM payment ORDER BY id ASC";
      $result = mysqli_query($conn, $sql);

      $xx = 0;
      while ($row = mysqli_fetch_array($result)) {
        $xx = $xx + 1
      ?>
        <tr>
          <td><?php echo $row['index_no']; ?></td>
          <td><?php echo $row['payment']; ?></td>
          <td><?php echo $row['cost']; ?></td>
          <td><?php echo $row['balance']; ?></td>
        </tr>
      <?php  } ?>
    </tbody>
  </table>

</body>



</html>