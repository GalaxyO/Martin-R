
<?php

	require_once('../phps/mysql_connect.php');
	// Ger variabeln $dbc som är anslutningen till databasen.
	
	$query = 'SELECT City,Population FROM Cities where population >= 5000000 ORDER BY Population DESC;';
	$query = 'SELECT City,Population FROM Cities where latitude >=0 ORDER BY City;';

	
	$result = mysqli_query($dbc, $query);
	
	echo '<table border="solid">';
	while($row = mysqli_fetch_array($result)){
	
	echo '<tr><td>' . ucfirst($row['City']) . ' </td> <td> ' . $row['Population'] . '</td></tr>';
}
echo '</table>';
echo '<table>';
	while($row = mysqli_fetch_array($result)){
	echo '<tr><td>' . ucfirst($row['City']) . ' </td> <td> ' . $row['Population'] . '</td> <td> ' . $row['Latitude'] . '</td></tr>';

		
		
	}
	echo '</table>';
	




?>
