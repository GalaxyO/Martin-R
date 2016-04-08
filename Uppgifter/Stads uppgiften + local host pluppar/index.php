
<?php
	require_once('../phps/mysql_connect.php');
	// Ger variabeln $dbc som är anslutningen till databasen.
	
	$query = 'SELECT City,Population FROM Cities where population >= 5000000 ORDER BY Population DESC;';

	$result = mysqli_query($dbc, $query);
	
	echo '<table border="solid">';
	while($row = mysqli_fetch_array($result)){
	
	echo '<tr><td>' . ucfirst($row['City']) . ' </td> <td> ' . $row['Population'] . '</td></tr>';
}

echo '</table>';

$query = 'SELECT City,Population FROM Cities where latitude >=0 ORDER BY City;';
$result = mysqli_query($dbc, $query);

$query2 = 'SELECT City,Population,Latitude FROM Cities where latitude >=0 ORDER BY City;';
$result2 = mysqli_query($dbc, $query2);

echo '<table border="solid">';
	while($row = mysqli_fetch_array($result2)){
	echo '<tr><td>' . $row['City'] . ' </td> <td> ' . $row['Population'] . '</td> <td> ' .  $row['Latitude'] . '</td></tr>';
		
	}
	echo '</table>';
?>
