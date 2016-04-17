
<?php
session_start(); // Starta session

if(!@$_SESSION['loggedIn']){ // Om man inte är inloggad
	header('Location: login.php'); // Skickas till login.php
}


if(@$_SESSION['timeout']+ 60*10 < time()){ //Om Sessionstiden + 10(60sekunder*10) minuter �r mindre �n nuvarande tid
	session_destroy(); // Avsluta sessionen
	session_unset(); // Avsluta sessionen (gammalt sätt)
	$meddelande = 'Well fought, I concede'; // Meddelande till användare = Hej då
}else{ //Sessionen fortfarande aktiv
	$meddelande = 'Greetings Traveler'; // Meddeladne till användare = Hej
	$_SESSION['timeout'] = time(); // Uppdatera sessionstiden
}

echo $meddelande; // Visa meddelande ( Greetings Traveler = Inloggad | Well fought, I concede = Utloggad)
?>

<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title> Log-on Screen </title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
  </head>
  <body>
    <main>