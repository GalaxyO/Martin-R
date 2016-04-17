<?
session_start();
require_once('c:/wamp/phps/mysql_connect.php');
// Ger variabeln $dbc som är anslutningen till databasen.

$query = "insert into users (First_Name, Adress, Country ,Mail) values 
('".$_POST['First_Name']."','".$_POST['Adress']."','".$_POST['Country']."','".$_POST['Mail']."')";
mysqli_query($dbc,$query);

$query = "SELECT ID FROM users ORDER BY ID DESC LIMIT 1";

$result = mysqli_query($dbc,$query);

$id = mysqli_fetch_array($result);

$pw = "insert into passwords(User_id,Password) values (".$id['ID'].",PASSWORD('".$_POST['Password']."'));";
mysqli_query($dbc,$query);

?>