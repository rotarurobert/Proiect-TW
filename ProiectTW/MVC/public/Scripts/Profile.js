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
