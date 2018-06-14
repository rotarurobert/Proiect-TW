  function inregistrare(){
    var username = document.getElementById("username").value;

    var password = document.getElementById("password").value;

    var password1 = document.getElementById("password1").value;

    var firstname = document.getElementById("firstname").value;

    var lastname = document.getElementById("lastname").value;

    var email = document.getElementById("email").value;

    var telephone_number = document.getElementById("telephone_number").value;

    var adress = document.getElementById("adress").value;

     if(document.getElementById("username").value == '' || document.getElementById("password").value == ''
     || document.getElementById("password1").value == '' || document.getElementById("firstname").value == ''
     || document.getElementById("lastname").value == '' || document.getElementById("telephone_number").value == ''
     || document.getElementById("email").value == '' || document.getElementById("adress").value == '')
    alert("Please complete all fields !");

    else{

    let xhr = new XMLHttpRequest();
    xhr.open("POST", "http://localhost/ProiectTW/MVC/public/Register/verificaEmail");
    xhr.addEventListener("load", function loadCallback() {
        switch (xhr.status) {
            case 200:
                console.log("Succ " + xhr.response);
                            console.log(xhr.response);
                if (xhr.response == 0){
            alert("Esti inregistrat deja");
            document.getElementById('username').value = '';
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
                          window.location.assign("http://localhost/ProiectTW/MVC/public");
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
                      telephone_number: `${telephone_number}`,
                      adress: `${adress}`
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
    //window.location.assign("http://localhost/ProiectTW/MVC/public")
 }
}
