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
	echo "<img src='C:/wamp/www/css/pics/";
	echo $row['pictures'];
	echo ' /></div>';
}
?>

<!DOCTYPE html> 
<html>
<body>
<a href="skins.php" class="dav">Buy<a/>
<a href="skins1.php"class="plupp">Buy2</a>
<a href="skins2.php"class="hood">Buy3</a>
  </body>
</html>

