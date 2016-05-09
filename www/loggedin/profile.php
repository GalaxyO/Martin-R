<?php
session_start();

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
    <img src="faze.png" id="logga">
    <h2> SiA </h2>
    <meta charset="UTF-8">
    <title> Profile </title>
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
  <li><a class="active"href="profile.php">Profile</a></li>
  <li><a href="cart.php">Cart</a></li>
  <li><a href="logout.php">Logout</a></li>
</ul>

<div id="box">
  
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src="js/index.js"></script>
  </body>
</html>

