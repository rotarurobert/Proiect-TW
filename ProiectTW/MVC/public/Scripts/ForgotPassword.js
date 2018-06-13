function sendMailJ(){
      var username = document.getElementById("username").value;

      if(document.getElementById("username").value == '')
     alert("Please complete all fields !");
else {

        let xhr2 = new XMLHttpRequest();
      xhr2.open("POST", "http://localhost/ProiectTW/MVC/public/ForgotPassword/getEmailAdress");
      xhr2.addEventListener("load", function loadCallback() {
          switch (xhr2.status) {
              case 200:
                  if(xhr2.response == '')
                  alert("Username-ul nu exista in baza de date!");
                  else
                  window.location.assign("http://localhost/ProiectTW/MVC/public");
                  console.log(xhr2.response);
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
        username: `${username}`
          }
      xhr2.send(JSON.stringify(payload));
        }
}
