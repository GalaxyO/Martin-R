<?php
require_once('C:/wamp/phps/mysql_connect.php');
session_start();

if(@$_SESSION['timeout']+ 1337-420 < time()){ //Om Sessionstiden + 4x20 sekunder innan användaren får timeout
	session_destroy(); // Avsluta sessionen
	session_unset();
	$meddelande = 'Safe Travels'; // Meddelande till användare = Safe travels
}else{ //Sessionen fortfarande aktiv
	$meddelande = 'Light fades...'; // Meddelande till användare = Light fades...
	$_SESSION['timeout'] = time(); // Uppdatera sessionstiden
} 
?>