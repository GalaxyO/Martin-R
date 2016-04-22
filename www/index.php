<?php
session_start(); // Starta session

if(!@$_SESSION['loggedIn']){ // Om man inte är inloggad
	header('Location: login.php'); // Skickas till login.php
}


if(@$_SESSION['timeout']+ 1337-420 < time()){ //Om Sessionstiden + 4x20 sekunder innan användaren får timeout
	session_destroy(); // Avsluta sessionen
	session_unset(); // Avsluta sessionen (gammalt sätt)
	$meddelande = 'Segt'; // Meddelande till användare = Segt
}else{ //Sessionen fortfarande aktiv
	$meddelande = 'The Butcher?'; // Meddelande till användare = The Butcher
	$_SESSION['timeout'] = time(); // Uppdatera sessionstiden
} 
?>

<!DOCTYPE html> 
<html>
  <head>
    <meta charset="UTF-8">
    <title> Main Page </title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
  </head>
  <body>  
  <a href="loggedIn/logout.php">Skins man</a>




    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src="js/index.js"></script>
  </body>
</html>
