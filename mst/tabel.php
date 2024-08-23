<?php
include "function/db.php";
// session_start();
// $status = htmlspecialchars(strip_tags(trim($_SESSION['val'])), ENT_QUOTES, 'UTF-8');

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registration Details</title>
  <link rel="stylesheet" href="css/tabel.css">
  <link rel="stylesheet" href="common/nav.css">
  <!-- <link rel="stylesheet" href="common/fotter.css"> -->
</head>

<body>
  <?php include "common/nav.php"; ?>
  
  <table>
    <caption>Registration Details</caption>
    <thead>
      <tr>
        <th>Full name</td>
        <th>Adress</td>
        <th>User name</td>
        <th>Email</td>
        <th>Phone</td>
        <th>Password</td>
        <th>Position</td>
        <th>Accept</td>
        <th>Reject</td>
      </tr>
    </thead>
    <tbody>
      <?php
      $sql = "SELECT * FROM registration WHERE status = 0 ORDER BY id ASC";
      $result = mysqli_query($conn, $sql);

      $xx = 0;
      while ($row = mysqli_fetch_array($result)) {
        $xx = $xx + 1
      ?>
        <tr>
          <td><?php echo $row['full_name']; ?></td>
          <td><?php echo $row['address']; ?></td>
          <td><?php echo $row['user_name']; ?></td>
          <td><?php echo $row['email']; ?></td>
          <td><?php echo $row['phone_number']; ?></td>
          <td><?php echo $row['password']; ?></td>
          <td><?php echo $row['position']; ?></td>
          <td><a class="abtn" type="button" href="function/accept_fun.php?id=<?php echo $row['id']; ?>&&action=1">Accept</a> </td>
          <td><a class="rbtn" type="button" href="function/accept_fun.php?id=<?php echo $row['id']; ?>&&action=2">Reject</a></td>
        </tr>
      <?php  } ?>
    </tbody>
  </table>


</body>

</html>