<?php
$hostname="localhost";
$firstname="root";  
$password="";       
$country="";
$mail="";

$database="st";  //database name which you created
$con=mysql_connect($hostname,$username,$password,$country,$mail);
if(! $con)
{
die('Connection Failed'.mysql_error());
}

mysql_select_db($database,$con);
?>