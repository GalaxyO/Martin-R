<?php
session_start();
require_once('C:/wamp/phps/mysql_connect.php');
// Ger variabeln $dbc som är anslutningen till databasen.

$query = "insert into ticket (departments, description, user) values 
('".$_POST['departments']."','".$_POST['description']."','". $_SESSION['id'] ."')"; // Skriver in värdena till databasen och gör en ticket
mysqli_query($dbc,$query);

$query = "SELECT ID FROM users ORDER BY ID DESC LIMIT 1";

$result = mysqli_query($dbc,$query);

$id = mysqli_fetch_array($result);
header('Location: ../support.php');
?>