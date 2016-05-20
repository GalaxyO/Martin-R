<?php
session_start(); // Starta session
if(!@$_SESSION['loggedIn']){ // Om man inte är inloggad
	header('Location: login.php'); // Skickas till login.php
}


if(@$_SESSION['timeout']+ 1337-420 < time()){ //Om Sessionstiden + 4x20 sekunder innan användaren får timeout
	session_destroy(); // Avsluta sessionen
	session_unset(); // Avsluta sessionen (gammalt sätt)
	$meddelande = 'Ha det g'; // Meddelande till användare = Segt
}else{ //Sessionen fortfarande aktiv
	$meddelande = 'Still hope'; // Meddelande till användare = The Butcher
	$_SESSION['timeout'] = time(); // Uppdatera sessionstiden
} 
?>

<!DOCTYPE html> 
<html>
  <head>
    <img src="loggedin/faze.png" id="logga">  
    <h2> SiA</h2>
    <meta charset="UTF-8">
    <title> Home </title>
    <link rel="stylesheet" type="text/css" href="css/stylez.css">
  </head>
  <body>

  <?php 
  include 'loggedin/includes/user.php'
  ?>
  
<ul>
  <li><a class="active" href="index.php">Home</a></li>
  <li><a href="loggedIn/products.php">Products</a></li>
  <li><a href="loggedIn/support.php">Support</a></li>
  <li><a href="loggedIn/chat.php">Chat</a></li>
  <li><a href="loggedIn/cart.php">Cart</a></li>
  <li><a href="loggedIn/logout.php">Logout</a></li>
</ul>

<div id="box">
  <p id ='ezlife'> Greetings Traveler! Would you like to buy some unique diseases? </p>
  <p id ='ezlife'> Head over to Products to see our custom made collection </p>

  </body>
</html>

