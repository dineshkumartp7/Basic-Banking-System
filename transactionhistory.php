<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaction History</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/table.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">

</head>

<body>
<?php
    include 'connection.php';
    $sql = "SELECT * FROM transaction";
    $result = mysqli_query($conn,$sql);
?>
<div class="background">
<nav class="navbar">
    <div class="logo"><img src="img/logo.png" alt="logo"></div>
    <ul class="nav-list">
    <li><a href="index.php">Home</a></li>
    <li><a href="customer.php">Customers</a></li>
    </ul>
</nav>

<table>
      <tr>
        <th colspan="5"><h2>TRANSACTION HISTORY</h2></th>
      </tr>  
      <tr>
          <th>SNO</th>
          <th>SENDER</th>
          <th>RECEIVER</th>
          <th>AMOUNT</th>
          <th>DATE/TIME</th>
      </tr>
    <?php
      while($rows=mysqli_fetch_assoc($result))
      {
    ?>
          <tr>
            <td><?php echo $rows['sno']; ?></td>
            <td><?php echo $rows['sender']; ?></td>
            <td><?php echo $rows['receiver']; ?></td>
            <td><?php echo $rows['balance']; ?></td>
            <td><?php echo $rows['datetime']; ?></td>
          </tr>
    <?php
      }
    ?>
  </table>

  </div>

  <footer>
    <p>&copy 2021.Made by <b>DINESH KUMAR T P</b>.</p>
  </footer>

</body>
</html>