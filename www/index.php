<?php
include 'loggedin/includes/bona.php'; // inkluderar en intressant php
?>

<!DOCTYPE html> 
<html>
  <head>
    <img src="loggedin/images/faze.png" id="logga">  
    <h2> SiA</h2>
    <meta charset="UTF-8">
    <title> Home </title>
    <link rel="stylesheet" type="text/css" href="css/stylez.css">
  </head>
  <body>

  <?php 
  include 'loggedin/includes/user.php'; // inkluderar en php som echoar username
  ?>
  
<ul>
  <li><a class="active" href="index.php">Home</a></li>
  <li><a href="loggedIn/products.php">Products</a></li>
  <li><a href="loggedIn/support.php">Support</a></li>
  <li><a href="loggedIn/cart.php">Cart</a></li>
  <li><a href="loggedIn/logout.php">Logout</a></li>
</ul>

<div id="box">
  <p id ='ezlife'> Greetings Traveler! Would you like to buy some unique diseases? </p>
  <p id ='ezlife'> Head over to Products to see our custom made collection </p>

  </body>
</html>

