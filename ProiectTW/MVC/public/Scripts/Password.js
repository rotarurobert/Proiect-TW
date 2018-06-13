function GggJ(){

        var oldpassword = document.getElementById("oldpassword").value;
        var password    = document.getElementById("newpassword").value;
        var password1   = document.getElementById("newpassword1").value;

        if(document.getElementById("oldpassword").value == '' || document.getElementById("newpassword1").value == '' || document.getElementById("newpassword").value == ''){
            alert("Please complete all fields !");
          }
            else{

        let xhr = new XMLHttpRequest();
        xhr.open("POST", "http://localhost/ProiectTW/MVC/public/ChangePassword/getPassword");
        xhr.addEventListener("load", function loadCallback() {
            switch (xhr.status) {
                case 200:
                    console.log("Succ " + xhr.response);
                                console.log(xhr.response);
                    if (xhr.response == 0){
                alert("Parola Gresita");
                document.getElementById('oldpassword').value = '';
              }else{
                //parolele nu corespund
                  if (password != password1){
                    alert("Parolele nu corespund");
                    document.getElementById('newpassword').value = '';
                    document.getElementById('newpassword1').value = '';
                    console.log("parolele nu corespund");
                  } else {
                    let xhr2 = new XMLHttpRequest();
                  xhr2.open("POST", "http://localhost/ProiectTW/MVC/public/ChangePassword/updatePassword");

                  xhr2.addEventListener("load", function loadCallback() {
                      switch (xhr2.status) {
                          case 200:
                              window.location.assign("http://localhost/ProiectTW/MVC/public/Profile");
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
                          password: `${password}`,
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
                 oldpassword: `${oldpassword}`
             }
        xhr.send(JSON.stringify(payload));

     }
   }
