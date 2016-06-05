<?php
session_start(); // Starta session
if(!@$_SESSION['loggedIn']){ // Om man inte är inloggad
	header('Location: login.php'); // Skickas till login.php
}


if(@$_SESSION['timeout']+ 1337-420 < time()){ //Om Sessionstiden + 1337-420 sekunder innan användaren får timeout
	session_destroy(); // Avsluta sessionen
	session_unset();
	$meddelande = 'Safe travels'; // Meddelande till användare = Safe travels
}else{ //Sessionen fortfarande aktiv
	$meddelande = 'Still hope'; // Meddelande till användare = Still hope
	$_SESSION['timeout'] = time(); // Uppdatera sessionstiden
}
?>