<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customers</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/table.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    
</head>

<body>

<?php
    include 'connection.php';
    $sql = "SELECT * FROM customer";
    $result = mysqli_query($conn,$sql);
?>


<div class="background">
<nav class="navbar">
    <div class="logo"><img src="img/logo.png" alt="logo"></div>
    <ul class="nav-list">
    <li><a href="index.php">Home</a></li>
    <li><a href="transactionhistory.php">Transaction History</a></li>
    </ul>
</nav>

<table>
      <tr>
        <th colspan="5"><h2>CUSTOMERS</h2></th>
      </tr>  
      <tr>
          <th>ID</th>
          <th>NAME</th>
          <th>EMAIL</th>
          <th>BALANCE</th>
          <th></th>
      </tr>
    <?php
      while($rows=mysqli_fetch_assoc($result))
      {
    ?>
          <tr>
            <td><?php echo $rows['id']; ?></td>
            <td><?php echo $rows['name']; ?></td>
            <td><?php echo $rows['email']; ?></td>
            <td><?php echo $rows['balance']; ?></td>
	    <td><a href="viewcustomer.php?id= <?php echo $rows['id'] ;?>"> <button class="btn">View</button></a></td>
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