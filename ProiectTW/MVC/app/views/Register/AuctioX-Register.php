<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="~/../../public/css/AuctioX-Register.css">
    <script type="text/javascript" src="~/../../public/Scripts/Register.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register</title>
  </head>
  <body>
    <div class="centru">
    <form>
<div class="container">
  <label for="username"><p>Enter a User Name</p></label>
  <input type="text" placeholder="User Name.." id="username" name="username" required>

  <label for="password"><p>Enter a Password</p></label>
  <input type="password" placeholder="Password.." id="password" name="password" required>

  <label for="password1"><p>ReEnter Password</p></label>
  <input type="password" placeholder="Password.." id="password1" name="password1" required>

  <label for="firstname"><p>Enter FirstName</p></label>
  <input type="text" placeholder="First Name.." id="firstname" name="firstname" required>

  <label for="lastname"><p>Enter LastName</p></label>
  <input type="text" placeholder="Last Name.." id="lastname" name="lastname" required>

  <label for="email"><p>Enter a email</p></label>
  <input type="text" placeholder="Email adress.." id="email" name="email" required>

  <label for="telephone_number"><p>Enter your Telephone Number</p></label>
  <input type="text" placeholder="Telephone Number.." id="telephone_number" name="telephone_number" required>

  <label for="adress"><p>Enter your Adress</p></label>
  <input type="text" placeholder="Address.." id="adress" name="adress" required>

  <button type="button" name = "btnLogin" onclick="inregistrare()">Submit</button>

</div>
</form>
</div>
</body>

</html>
