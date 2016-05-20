<?php
include 'includes/bonus.php';
?>

<!DOCTYPE html> 
<html>
  <head>
    <img src="faze.png" id="logga">
    <h2> SiA </h2>
    <meta charset="UTF-8">
    <title> Your Tickets </title>
    <link rel="stylesheet" type="text/css" href="../css/stylez.css">
  </head>
  <body>

 <?php 
  echo "<p id='loginN'> Logged in as "; 
  echo $_SESSION['First_Name']; echo "</p>";
  ?>
  
<ul>
  <li><a href="../index.php">Home</a></li>
  <li><a href="products.php">Products</a></li>
  <li><a href="support.php">Support</a></li>
  <li><a href="profile.php">Profile</a></li>
  <li><a href="cart.php">Cart</a></li>
  <li><a href="logout.php">Logout</a></li>
</ul>
<a div id="david" href="kill.php">Delete Tickets</a>
  
  <?php
include 'includes/ticka.php';
  ?>
  </body>
</html>