function getEndTodayInformation(){
    let mockReq = new XMLHttpRequest();
    mockReq.open('GET', 'http://localhost/ProiectTW/MVC/public/Main/getEndToday');

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
    console.log(jsonResp);

    document.getElementById("end_today1name").innerHTML = jsonResp.end_today1name;
        document.getElementById("end_today1price").innerHTML = jsonResp.end_today1price;

    document.getElementById("end_today2name").innerHTML = jsonResp.end_today2name;
        document.getElementById("end_today2price").innerHTML = jsonResp.end_today2price;

    document.getElementById("end_today3name").innerHTML = jsonResp.end_today3name;
        document.getElementById("end_today3price").innerHTML = jsonResp.end_today3price;

    document.getElementById("end_today4name").innerHTML = jsonResp.end_today4name;
        document.getElementById("end_today4price").innerHTML = jsonResp.end_today4price;

    document.getElementById("end_today5name").innerHTML = jsonResp.end_today5name;
        document.getElementById("end_today5price").innerHTML = jsonResp.end_today5price;


}
