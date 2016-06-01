<?php
include 'includes/bonus.php'; // inkluderar ett timeout system
?>

<!DOCTYPE html> 
<html>
  <head>
    <img src="faze.png" id="logga">
    <h2> SiA </h2>
    <meta charset="UTF-8">
    <title> Support </title>
    <link rel="stylesheet" type="text/css" href="../css/stylez.css">
  </head>
  <body>

<?php 
include 'includes/user.php'; // inkluderar en php som echoar username
  ?>
  
<ul>
  <li><a href="../index.php">Home</a></li>
  <li><a href="products.php">Products</a></li>
  <li><a class="active" href="support.php">Support</a></li>
  <li><a href="chat.php">Chat</a></li>
  <li><a href="cart.php">Cart</a></li>
  <li><a href="logout.php">Logout</a></li>
</ul>

<div id="box">

  <div class="blacksmall"> Create Ticket</div>
  
  <form action="tickets/supp.php" method="POST">
  <span class="blacksmall"> Department:</span>
  <select div class="submitbox" name="departments" id="departments">
  <option>Difficulties</option>
  <option>Issues with Product</option>
  <option>Errors</option>
  <option>Other</option>
</select>

<textarea name = "description" id="description" rows="15" cols="60" placeholder="Please describe the issue you are having.."></textarea>
<input type="submit" id="submit" name="submit" value="Create Ticket"/>
<a div class="smallblack"href="tickets/ticko.php"> Browse Tickets</a>

  </body>
</html>

