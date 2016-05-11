<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title> Register Form </title>
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


  <form id="form" action="regsend.php" method="post">
    <div class="box">
      <label id="First_Name" for="First_Name"></label>
      <input type="text" name="First_Name" id="First_Name" placeholder="User Name" required/>
      <input type="text" name="Password" placeholder="Password" required/>
      <input type="text" name="Mail" placeholder="Mail" required/>
      <input type="text" name="Country" placeholder="Country" required/>
      <td class="center">
      <input type="submit" id="submit" name="submit" value="Login"/>
      
      <p><a href="login.php">Back to Login Page</a></p>
    </form>
    </div>
  </div>
</div>

    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src="js/index.js"></script>

  </body>
</html>