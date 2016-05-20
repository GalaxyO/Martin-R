<?php
session_start();
require_once('C:/wamp/phps/mysql_connect.php');
// Ger variabeln $dbc som är anslutningen till databasen.

$query = 'DELETE FROM ticket WHERE user='.$_SESSION['id'].';';
mysqli_query($dbc,$query);

header('Location: ../index.php');
?>