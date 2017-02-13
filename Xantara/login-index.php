<?php
  include "php/database.php";
  include "php/login.php"
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Login Form</title>
    <link href="css/login.css" rel="stylesheet" type="text/css">
    <link rel="icon"  type="image/png" href="images/XANTARA DEV -transparent.png" />
  </head>
  <body>
    <div class="row login-container">
      <div class="row box">
        <div class="col-12 loginform">
          <form class="row" role="form" method="POST" action="login-index.php">
            <div class="login">
              <input type="text" class="input" placeholder="Username" name="uname"/>
            </div>
            <div class="login">
              <input type="password" class="input" placeholder="Password" name="psw"/>
            </div>
            <button type="submit" class="submit" name="Login">Sign in</button>
            <p class="login_signup"><input type="checkbox" class="checkbox" checked="checked" style="width: auto; height: auto"> Remember Me &nbsp;</p>
          </form>
        </div>
      </div>
    </div>
  </body>
</html>
