function updateTelephoneNumberJ(){
      var telephone_number = document.getElementById("telephone_number").value;

      if(document.getElementById("telephone_number").value == '')
     alert("Please complete all fields !");
else {

        let xhr2 = new XMLHttpRequest();
      xhr2.open("POST", "http://localhost/ProiectTW/MVC/public/ChangeTelephoneNumber/updateTelephoneNumber");
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
        telephone_number: `${telephone_number}`
          }
      xhr2.send(JSON.stringify(payload));
        }
}
