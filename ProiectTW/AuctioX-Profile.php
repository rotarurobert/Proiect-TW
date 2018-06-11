<!DOCTYPE html>
<html>
<meta charset="utf-8">
  <title>Profile</title>
  <link rel="stylesheet" href="~/../../public/css/AuctioX-Profile.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
<body onload="getProfileInformation()">


</div>
<div class='lists'>
<ul>
	 <li><b>First-Name: <span id="first_name"></b></li>
   <li><b>Last-Name: <span id="last_name"></b></li>
	 <li><b>Telephone-number: <span id="telephone_number"></b></li>
	 <li><b>Email: <span id="email"></b></li>
	 <li><b>Adress: <span id="adress"></b></li>
	 </ul>
	 </div>
</div>
</body>
<script>

function getProfileInformation(){
    let mockReq = new XMLHttpRequest();
    mockReq.open('GET', 'http://localhost/ProiectTW/MVC/public/Profile/getUserProfileInformation');

    mockReq.addEventListener('load', function onLoad(){
      console.log(mockReq.response);
        let jsonResp = JSON.parse(mockReq.response);
        switch(mockReq.status){
            case 200:
                console.log("Call ajax success!");
                changeTextElements(jsonResp);

                break;
            default:
                console.log("Alte probleme");
                break;
        }
    });

    mockReq.addEventListener('error', () =>{
        console.error("Something failled");
    });

    mockReq.send();
}

function changeTextElements(jsonResp){

    document.getElementById("first_name").innerHTML = jsonResp.first_name;
    document.getElementById("last_name").innerHTML = jsonResp.last_name;
    document.getElementById("telephone_number").innerHTML = jsonResp.telephone_number;
    document.getElementById("email").innerHTML = jsonResp.email;
    document.getElementById("adress").innerHTML = jsonResp.adress;

}
</script>
</html>
