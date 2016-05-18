<?php
require_once('C:/wamp/phps/mysql_connect.php');
// Ger variabeln $dbc som är anslutningen till databasen.

$query = 'SELECT * FROM ticket WHERE user='.$_SESSION['id'].';';
$support = mysqli_query($dbc,$query);

	echo '<div id="allticka">';
while ($row = mysqli_fetch_array($support)) {
	echo '<div id="tickbo">';
	echo $row['departments'];
	echo ":<br />";
	echo $row['description'];
	echo "<br />";
	echo $row['reply'];
	echo '</div>';
}
?>