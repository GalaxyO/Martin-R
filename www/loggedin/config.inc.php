<?php
$db_username        = 'root'; //MySql database username
$db_password        = 'COMMANDER5'; //MySql dataabse password
$db_name            = 'st'; //MySql database name
$db_host            = 'localhost'; //MySql hostname or IP

$currency			= '&#163; '; //currency symbol
$shipping_cost		= 1.50; //shipping cost
$taxes				= array( //List your Taxes percent here.
							'VAT' => 12, 
							'Service Tax' => 5,
							'Other Tax' => 10
							);

$mysqli_conn = new mysqli($db_host, $db_username, $db_password,$db_name);
if ($mysqli_conn->connect_error) {// Skriver ut om det är någon sorts error
    die('Error : ('. $mysqli_conn->connect_errno .') '. $mysqli_conn->connect_error);
}