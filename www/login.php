<?php
session_start(); //Starta sessionen
if(@$_SESSION['loggedIn']){ //Kolla om man är inloggad
	header('Location: index.php'); // Om man är inloggad skickas man till index.php
}
?>
<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title> Login Form</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
  </head>
  <body>
    <main>

          <div class="vid-container">
        <video id="Video1" class="bgvid back" autoplay="false" muted="muted" preload="auto" loop>
        <source src="http://shortcodelic1.manuelmasiacsasi.netdna-cdn.com/themes/geode/wp-content/uploads/2014/04/milky-way-river-1280hd.mp4.mp4" type="video/mp4">
        </video>
        <div class="inner-container">
        <video id="Video2" class="bgvid inner" autoplay="false" muted="muted" preload="auto" loop>
        <source src="http://shortcodelic1.manuelmasiacsasi.netdna-cdn.com/themes/geode/wp-content/uploads/2014/04/milky-way-river-1280hd.mp4.mp4" type="video/mp4">
        </video>
            <div class="box">

        <form id="form" action="confirm.php" method="post">
      <label id="user" for="First_Name"></label>
      <input type="text" name="First_Name" id="First_Name" placeholder="Username" required/>
      <input type="Password" name="Password" placeholder="Password" required/>
      <td class="center">
      <input type="submit" id="submit" name="submit" value="Login"/>
      <p> <a href="register.php"><span>Register</span></a></p>
    </form>
    </div>
  </div>
</div>

    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src="js/index.js"></script>

  </body>
</html>