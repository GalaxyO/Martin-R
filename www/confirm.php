<?php
session_start(); // Starta sessionen ( Alltid överst)

if(!isset($_POST['First_Name']) AND !isset($_POST['Password'])){ // Kolla om man har fyllt i Namn OCH Läsenord via formuläret
	header('Location: login.php'); // Skickas till login.php igen om man inte har fyllt i ovanst�ende
}

require_once('C:/wamp/phps/mysql_connect.php'); // Databasanslutning (ER SöKVäG)
// Ger variabel $dbc som är databasanslutningen.
 
 
$query = 'SELECT * FROM users WHERE First_Name="'.$_POST['First_Name'].'";';
// Hämta Användarnamn och 
$result = mysqli_query($dbc,$query); // Ställ fråga till databasen
$id = mysqli_fetch_array($result); //Hämta den rad man får som svar (Om det finns någon)

$pw = "SELECT * FROM passwords WHERE User_id =".$id['ID']." AND Password=PASSWORD('".$_POST['Password']."');";
$result = mysqli_query($dbc,$query);
$row = mysqli_fetch_array($result);

if($row){ // Om Användarnamnet i databasen är samma som från formuläret
	$_SESSION['loggedIn'] = TRUE; // Inloggad SANT
	$_SESSION['timeout'] = time(); // Timeout = Nuvarande tid 
	header('Location: loggedIn/indo.php'); // Skickas till index.php
}else{ // Om användarnamnen inte stämmer överens
	$_SESSION['loggedIn'] = FALSE; // Inloggad FALSKT
	header('Location: http://www.hltv.org/news/11703-verygames-to-shut-down'); // Skickas till RiP
}

?>