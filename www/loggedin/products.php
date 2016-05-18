<?php
session_start();

include 'includes/bonus.php';
?>

<!DOCTYPE html> 
<html>
  <head>
    <img src="faze.png" id="logga">
    <h2> SiA </h2>
    <meta charset="UTF-8">
    <title> Products </title>
    <link rel="stylesheet" type="text/css" href="../css/stylez.css">
  </head>
  <body>

 <?php 
  echo "<p id='loginN'> Logged in as "; 
  echo $_SESSION['First_Name']; echo "</p>";
  ?>
  
<ul>
  <li><a href="../index.php">Home</a></li>
  <li><a class="active" href="products.php">Products</a></li>
  <li><a href="support.php">Support</a></li>
  <li><a href="chat.php">Chat</a></li>
  <li><a href="cart.php">Cart</a></li>
  <li><a href="logout.php">Logout</a></li>
</ul>

<div id="box">
  
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src="js/index.js"></script>
  </body>
</html>

