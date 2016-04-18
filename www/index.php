<?php
session_start(); // Starta session

if(!@$_SESSION['loggedIn']){ // Om man inte är inloggad
	header('Location: login.php'); // Skickas till login.php
}


if(@$_SESSION['timeout']+ 1337+420 < time()){ //Om Sessionstiden + 177sekunder+420) minuter �r mindre �n nuvarande tid
	session_destroy(); // Avsluta sessionen
	session_unset(); // Avsluta sessionen (gammalt sätt)
	$meddelande = 'Segt'; // Meddelande till användare = Hej då
}else{ //Sessionen fortfarande aktiv
	$meddelande = 'The Butcher?'; // Meddeladne till användare = Hej
	$_SESSION['timeout'] = time(); // Uppdatera sessionstiden
}
?>
