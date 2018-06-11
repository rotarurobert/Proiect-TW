public function inregistrare(){

    var username = document.getElementById("username").value;
    var password = document.getElementById("password").value;
    var password1 = document.getElementById("password1").value;
    var firstname = document.getElementById("firstname").value;
    var lastname = document.getElementById("lastname").value;
    var email = document.getElementById("email").value;
    var telephone_number = document.getElementById("telephone_number").value;
    let xhr = new XMLHttpRequest();

    xhr.open("POST", "http://localhost/ProiectTW/MVC/public/Register/register");

    xhr.addEventListener("load", function loadCallback() {
        switch (xhr.status) {
            case 200:
                console.log("Success" + xhr.response);
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
                      password: `${password}`,
                      firstname: `${firstname}`,
                      lastname: `${lastname}`,
					            email: `${email}`,
					            telephone_number: `${telephone_number}`
					        }
    xhr.send(JSON.stringify(payload));

    }
