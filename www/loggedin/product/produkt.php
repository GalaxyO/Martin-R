<?php
require_once('C:/wamp/phps/mysql_connect.php');
// Ger variabeln $dbc som är anslutningen till databasen.

$query = 'SELECT * FROM products'; // Läser in alla produkter
$support = mysqli_query($dbc,$query);

echo '<div id="allticka">'; 
while ($row = mysqli_fetch_array($support)) {
	echo '<div id="pbo">';
	echo $row['Product_Name'];
	echo "<br />";
	echo $row['Description'];
	echo "<br />";
	echo $row['Price'];
	echo ' kr <br />';
	echo "<img src='/css/pics/";
	echo $row['pictures'];
	echo "'/></div>";
}
?>
