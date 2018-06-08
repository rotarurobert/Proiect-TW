<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="AuctioX-Register.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register</title>
  </head>
  <body>
    <div class="centru">
    <form>
<div class="container">
  <label for="username"><p>Enter a User Name</p></label>
  <input type="text" placeholder="User Name..." id="username" name="username" required>

  <label for="password"><p>Enter a Password</p></label>
  <input type="password" placeholder="Password..." id="password" name="password" required>

  <label for="password1"><p>ReEnter Password</p></label>
  <input type="password" placeholder="Password..." id="password1" name="password1" required>

  <label for="firstname"><p>Enter FirstName</p></label>
  <input type="text" placeholder="First Name..." id="firstname" name="firstname" required>

  <label for="lastname"><p>Enter LastName</p></label>
  <input type="text" placeholder="Last Name..." id="lastname" name="lastname" required>

  <label for="email"><p>Enter a email</p></label>
  <input type="text" placeholder="Email adress..." id="email" name="email" required>

  <label for="telephone_number"><p>Enter your Telephone Number</p></label>
  <input type="text" placeholder="Telephone Number..." id="telephone_number" name="telephone_number" required>

  <button type="button" name = "btnLogin" onclick="inregistrare()">Submit</button>

</div>
</form>

</div>
  </body>
  <script >
    function inregistrare(){

      var username = document.getElementById("username").value;
      var password = document.getElementById("password").value;
      var password1 = document.getElementById("password1").value;
      var firstname = document.getElementById("firstname").value;
      var lastname = document.getElementById("lastname").value;
      var email = document.getElementById("email").value;
      var telephone_number = document.getElementById("telephone_number").value;

      let xhr = new XMLHttpRequest();

   		xhr.open("POST", "http://localhost/ProiectTW/MVC/public/Register/verificaEmail");

   		xhr.addEventListener("load", function loadCallback() {
   		    switch (xhr.status) {
   		        case 200:
   		            console.log("Succ " + xhr.response);
   		            if (xhr.response == 0){
   						alert("Esti inregistrat deja");
   						document.getElementById('username').value = '';
   						console.log("esti pe if-ul pentru verificaEmail");
   					}else{

   						//parolele nu corespund
   					    if (password !== password1){
   					    	alert("Parolele nu corespund");
   					    	document.getElementById('password').value = '';
   					    	document.getElementById('password1').value = '';
   					    	console.log("parolele nu corespund");

   					    } else {
   					    	let xhr2 = new XMLHttpRequest();

   							xhr2.open("POST", "http://localhost/ProiectTW/MVC/public/Register/inregistreaza");

   							xhr2.addEventListener("load", function loadCallback() {
   							    switch (xhr2.status) {
   							        case 200:
   							            console.log("Success, ai inserat in baza de date" + xhr2.response);
   							            break;
   							        case 404:
   							            console.log("Oups! Not found");
   							            break;
   							    }
   							});

   							xhr2.addEventListener("error", function errorCallback() {
   							    console.log("Network error");
   							});

   							let payload = {
   					            username: `${username}`,
                        password: `${password}`,
                        password1: `${password1}`,
                        firstname: `${firstname}`,
                        lastname: `${lastname}`,
                        email: `${email}`,
   					            telephone_number: `${telephone_number}`
   					        }
   							xhr2.send(JSON.stringify(payload));
   					    	}
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
               username: `${username}`
           }
   		xhr.send(JSON.stringify(payload));
      window.location.assign("http://localhost/ProiectTW/MVC/public")
   }

  </script>
</html>
