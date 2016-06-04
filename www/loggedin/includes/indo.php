<?php
session_start();

if(@$_SESSION['loggedIn']){ //Kolla om man är inloggad
  header('Location: ../../index.php'); // Om man är inloggad skickas man till index.php
}
?>