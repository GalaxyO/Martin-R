<?php
session_start(); // Starta sessionen ( Alltid överst)

if(!isset($_POST['Name']) AND !isset($_POST['Password'])){ // Kolla om man har fyllt i Namn OCH Läsenord via formul�ret
	header('Location: login.php'); // Skickas till login.php igen om man inte har fyllt i ovanst�ende
}

require_once('C:/wamp/SQL Files/connection/mysql_connect_db_webshop.php'); // Databasanslutning (ER SöKVäG)
// Ger variabel $dbc som �r databasanslutningen.
 
 
$query = 'SELECT Username, Password FROM Admins WHERE Password=PASSWORD("' . $_POST['Password'] . '") AND Username="'.$_POST['Name'].'";'; // Hömta Användarnamn och L�senord där det instkrivna uppgifterna stämmer �verens. (Om de finns)
$result = mysqli_query($dbc,$query); // Ställ fr�ga till databasen
$username = mysqli_fetch_array($result); //Hämta den rad man får som svar (Om det finns någon)

if($username['Username'] = $_POST['Name']){ // Om Användarnamnet i databasen är samma som fr�n formuläret
	$_SESSION['loggedIn'] = TRUE; // Inloggad SANT
	$_SESSION['timeout'] = time(); // Timeout = Nuvarande tid 
	header('Location: index.php'); // Skickas till index.php
}else{ // Om anv�ndarnamnen inte st�mmer överens
	$_SESSION['loggedIn'] = FALSE; // Inloggad FALSKT
	header('Location: login.php'); // Skickas till login.php
}

?>