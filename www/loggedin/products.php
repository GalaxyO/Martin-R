<?php
include 'includes/bonus.php'; // inkluderar ett timeout system
?>

<!DOCTYPE html> 
<html>
  <head>
    <img src="images/faze.png" id="logga">
    <h2> SiA </h2>
    <meta charset="UTF-8">
    <title> Products </title>
    <link rel="stylesheet" type="text/css" href="../css/stylez.css">
  </head>
  <body>

 <?php 
  include 'includes/user.php'; // inkluderar en php som echoar username
  ?>
  
<ul>
  <li><a href="../index.php">Home</a></li>
  <li><a class="active" href="products.php">Product</a></li>
  <li><a href="support.php">Support</a></li>
  <li><a href="cart.php">Cart</a></li>
  <li><a href="logout.php">Logout</a></li>
</ul>

<h3> Future Possible Projects </h3>

<?php
  include 'product/produkt.php';
?>
  </body>
</html>

