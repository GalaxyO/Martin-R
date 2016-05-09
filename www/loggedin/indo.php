<?php
session_start();

if(@$_SESSION['loggedIn']){ //Kolla om man är inloggad
  header('Location: ../index.php'); // Om man är inloggad skickas man till index.php
  echo $_SESSION["First_Name"];
}
?>


<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title> Main Page </title>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
  </head>
  <body>

<?php include 'duck.php'; ?>
  <a href="logout.php">Skins man</a>

    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src="js/index.js"></script>

  </body>
</html>
