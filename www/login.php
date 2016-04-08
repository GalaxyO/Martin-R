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
    <title>Pure CSS Blurred Video Background Login Box. (fork)</title>
    
    
    
    
        <link rel="stylesheet" href="css/style.css">

    
    
    
  </head>

  <body>

    <div class="vid-container">
  <video id="Video1" class="bgvid back" autoplay="false" muted="muted" preload="auto" loop>
      <source src="http://shortcodelic1.manuelmasiacsasi.netdna-cdn.com/themes/geode/wp-content/uploads/2014/04/milky-way-river-1280hd.mp4.mp4" type="video/mp4">
  </video>
  <div class="inner-container">
    <video id="Video2" class="bgvid inner" autoplay="false" muted="muted" preload="auto" loop>
      <source src="http://shortcodelic1.manuelmasiacsasi.netdna-cdn.com/themes/geode/wp-content/uploads/2014/04/milky-way-river-1280hd.mp4.mp4" type="video/mp4">
    </video>
    <div class="box">
      <h1>Login</h1>
      <input type="text" placeholder="Username"/>
      <input type="text" placeholder="Password"/>
      <button>Login</button>
      <p>Not a member? <span>Sign Up</span></p>
    </div>
  </div>
</div>
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

        <script src="js/index.js"></script>

    
    
    
  </body>
</html>
	
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" /> 
    <title>
        HTLML - CSS Webshops Login 
    </title>
    <link rel="stylesheet" type="text/css" href="css/style.css" />
</head>
<body>

	<p id= "rubrik"> Login </p>
	<main>
	<form id="form" name="form" action="confirm.php" method="post">

	<div id="block">
		<label id="user" for="name">p</label>
		<input type="text" name="name" id="name" placeholder="Username" required/>
		<label id="pass" for="password">k</label>
		<input type="password" name="password" id="password" placeholder="Password" required />
		<td class="center">
		<input type="submit" id="submit" name="submit" value="Login"/>
	</div>
</form>
<div id="option"> 
	<p>Login</p> 
	<a href="#">forgot?</a>
</div>
</body>
</html>
<!-- SLUT PÅ FORMULÄR -->