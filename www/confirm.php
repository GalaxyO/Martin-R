<?php
session_start(); // Starta sessionen ( Alltid överst)

if(!isset($_POST['First_Name']) AND !isset($_POST['Password'])){ // Kolla om man har fyllt i Namn OCH Läsenord via formuläret
	header('Location: login.php'); // Skickas till login.php igen om man inte har fyllt i ovanst�ende
}

require_once('C:/wamp/phps/mysql_connect.php'); // Databasanslutning
// Ger variabel $dbc som är databasanslutningen.
 
 
$query = 'SELECT * FROM users WHERE First_Name="'.$_POST['First_Name'].'";';
// Hämta Användarnamn via kolumn First_Name som då används som username
$result = mysqli_query($dbc,$query); // Ställer denna fråga till databasen
$id = mysqli_fetch_array($result); //Hämta den rad man får som svar (Om det finns någon)

$pw = "SELECT * FROM passwords WHERE User_id =".$id['ID']." AND Password=PASSWORD('".$_POST['Password']."');";
$result = mysqli_query($dbc,$query);
$row = mysqli_fetch_array($result);
$skins = $row['ID'];
$First_Name = $row['First_Name'];
$First_Name = explode(' ',$First_Name)[0];

if($row){ // Om Användarnamnet i databasen är samma som från formuläret
	$_SESSION['loggedIn'] = TRUE; // Inloggad SANT
	$_SESSION['timeout'] = time(); // Timeout = Nuvarande tid 
	$_SESSION['First_Name'] = $First_Name;
	$_SESSION['id'] = $skins; //id
	header('Location: loggedIn/includes/indo.php'); // Skickas till index.php
}else{ // Om användarnamnen inte stämmer överens
	$_SESSION['loggedIn'] = FALSE; // Inloggad FALSKT
	header('Location: http://www.hltv.org/news/11703-verygames-to-shut-down'); // Skickas till dåliga tider pågrund av fel lösenord/användarnamn
}

?>