<?php
session_start();
require_once('C:/wamp/phps/mysql_connect.php');
// Ger variabeln $dbc som är anslutningen till databasen.

$query = "insert into users (First_Name, Mail ,Country) values 
('".$_POST['First_Name']."','".$_POST['Mail']."','".$_POST['Country']."')";
mysqli_query($dbc,$query);
// sätter in värdena username till databasen
$query = "SELECT ID FROM users ORDER BY ID DESC LIMIT 1";

$result = mysqli_query($dbc,$query);

$id = mysqli_fetch_array($result);

$pw = "insert into passwords(User_id,Password) values (".$id['ID'].",PASSWORD('".$_POST['Password']."'));";
mysqli_query($dbc,$pw);
// sätter in värdena till lösenordet till databasen
header('location: login.php');
?>