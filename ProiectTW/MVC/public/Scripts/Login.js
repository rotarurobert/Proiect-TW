function logareJ(){

        var username = document.getElementById("username").value;
        var password = document.getElementById("password").value;

        if(document.getElementById("username").value == '' || document.getElementById("password").value == '')
          alert("Please complete all fields !");

    else {

        let xhr = new XMLHttpRequest();
        xhr.open("POST", 'http://localhost/ProiectTW/MVC/public/Login/verificaUsername');
        xhr.addEventListener("load", function loadCallback() {
          switch (xhr.status) {
            case 200:
              if (xhr.response == password){
                window.location.assign("http://localhost/ProiectTW/MVC/public/Main/AuctioX-Main.php");
            }
         else if (xhr.response != password){
              console.log("Username-ul sau parola sunt gresite !");
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
    }
