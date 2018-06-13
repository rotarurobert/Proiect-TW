<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="~/../../public/css/AuctioX-Login.css">
    <script type="text/javascript" src="~/../../public/Scripts/Login.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sign In</title>
  </head>
  <body>

  <div class="centru">
      <form>
  <div class="imgcontainer">
    <img src="https://images-na.ssl-images-amazon.com/images/I/41f9B0mX7fL.png" alt="Avatar" class="avatar">
  </div>

  <div class="container">
    <label for="username"><p>Username</p></label>
    <input type="text" placeholder="Enter Username..." id="username" name="username" required>
    <label for="password"><p>Password</p></label>
    <input type="password" placeholder="Enter Password..." id="password" name="password" required>

    <button type="button" onclick="logareJ()">Login</button>

  </div>

  <div class="container">
      <a href="http://localhost/ProiectTW/MVC/public/Register"><button type="button" class="registerbtn">Register</button></a>
        <a href="http://localhost/ProiectTW/MVC/public/ForgotPassword"><button type="button" class="forgotpassbtn">Forgot Password</button></a>
  </div>

      </form>
    </div>
  </body>
</html>
