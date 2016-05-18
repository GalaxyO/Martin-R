<?php
if(@$_SESSION['timeout']+ 1337-420 < time()){ //Om Sessionstiden + 4x20 sekunder innan användaren får timeout
	session_destroy(); // Avsluta sessionen
	session_unset(); // Avsluta sessionen (gammalt sätt)
	$meddelande = 'Ha det g'; // Meddelande till användare = Segt
}else{ //Sessionen fortfarande aktiv
	$meddelande = 'Still hope'; // Meddelande till användare = The Butcher
	$_SESSION['timeout'] = time(); // Uppdatera sessionstiden
} 
?>