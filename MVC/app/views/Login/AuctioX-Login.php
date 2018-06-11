<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="~/../../public/css/AuctioX-Login.css">
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
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
  </div>

  <div class="container">
      <a><button type="button" class="cancelbtn">Cancel</button></a>
    <span class="psw"><a href="http://localhost/ProiectTW/MVC/public/Register">Create an Account!</a></span>
  </div>
      </form>
    </div>
  </body>
  <script>
  function logareJ(){
var username = document.getElementById("username").value;
var password = document.getElementById("password").value;
console.log(username);
console.log(password);
let xhr = new XMLHttpRequest();
xhr.open("POST", 'http://localhost/ProiectTW/MVC/public/Login/verificaUsername');
xhr.addEventListener("load", function loadCallback() {
        switch (xhr.status) {
            case 200:
              if (xhr.response == password){
                console.log(xhr.response);
                console.log("Te-ai connectat cu succes!");
                window.location.assign("http://localhost/ProiectTW/MVC/public/Main/AuctioX-Main.php");
              } else if (xhr.response != password){
                console.log("Username-ul sau parola gresite !");
                alert("Username-ul sau parola gresite !");
                document.getElementById("password").value = '';
              }
            break;
          case 404:
            console.log("Oups! Not found");
            break;
        }
});
xhr.addEventListener("error", function errorCallback() {
          console.log("Network error");
});
let payload = {
    username: `${username}`,
    password: `${password}`
}
xhr.send(JSON.stringify(payload));
}
</script>
</html>
