<?php 
include "function/db.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback</title>
    <link rel="stylesheet" href="css/tabel.css">
  <link rel="stylesheet" href="common/nav.css">
</head>
<body>
<?php include "common/nav.php"; ?>
  
  <table>
    <caption>Feedback</caption>
    <thead>
      <tr>
        <th>Index Number</td>
        <th>name</td>
        <th>Message</td>
       
      </tr>
    </thead>
    <tbody>

    <?php
      $sql = "SELECT * FROM feedback ORDER BY id ASC";
      $result = mysqli_query($conn, $sql);

      $xx = 0;
      while ($row = mysqli_fetch_array($result)) {
        $xx = $xx + 1
      ?>
        <tr>
        <td><?php echo $row['index_number']; ?></td>
          <td><?php echo $row['name']; ?></td>
          <td><?php echo $row['message']; ?></td>
        </tr>
        <?php  } ?>
    </tbody>
  </table>
</body>
</html>