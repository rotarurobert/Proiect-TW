<html>
  <!DOCTYPE html>
  <title>AuctioX</title>
  <link rel="stylesheet" href="~/../../css/AuctioX-Main.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="utf-8">
<header>
  <div class="navbar">
    <a href="#A"><ab>EndToday</ab>
    <a href="http://localhost/ProiectTW/MVC/public/SellItem"><ab>Sell</ab></a>
    <a href="http://localhost/ProiectTW/MVC/public/Logout">"<ab style ="float:right">LogOut</ab></a>
  </div>

  <div class="bar">
          <a href="http://localhost/ProiectTW/MVC/public/Profile"><ab>Profile</ab></a>
          <a href="AuctioX-Search.html"><button type="button" style ="float:right">Search</button></a>
          <input type="text" placeholder="Search.."style ="float:right">
  </div>
</header>
<body onload = "getEndTodayInformation()">
<p>
ATOM feed incoming !
</p>

<hr>
<a name="A"><div class="content"><b> Auctions that end today ! </b></div></a>

<section>
  <div class="best-prices"><p>Name: <span id="end_today1name">Price: <a id ="end_today1price"></p> </div>
  <div class="best-prices">Name: <span id="end_today2name">Price: <a id ="end_today2price"> </div>
  <div class="best-prices">Name: <span id="end_today3name">Price: <a id ="end_today3price"> </div>
  <div class="best-prices">Name: <span id="end_today4name">Price: <a id ="end_today4price"> </div>
  <div class="best-prices">Name: <span id="end_today5name">Price: <a id ="end_today5price"> </div>
</section>
<p><b> What is AuctioX? </b></p>
AuctioX is a free online auction marketplace offering local, national, and international trade with no fees for bidding, buying, or selling.  You can turn your unwanted stuff into cash, and get the best possible deals for new or used things on AuctioX with no selling fees, and no bidding fees.
<p>Just like an online garage sale, on AuctioX you can find online auctions for items that haven't been sold in decades.  Rare and collectable merchandise, as well as state of the art new electronics.  It's all here!</p>

<p><b>Why online auctions?</b></p>
<p>Online Auctions offer buyers the lowest possible price for unique items that only they may be interested in, while at the same time offering sellers the highest dollar amount for an item which is rare, collectable, and/or highly sought after.</p>
<p><b>Is everything an auction?</b></p>
<p>No! There are hundreds of thousands of items on AuctioX for which sellers have declared fixed prices that they're willing to sell for.  Get what you need today, and don't wait for the online auction to complete, by using these fixed buy now prices.</p>

<p><b>How can you offer a free marketplace?</b></p>
<p>Rather than charging sellers online auction fees, or charging buyers by the bid, AuctioX is operated as a free community service supported by advertising.  Yes, we know the ads can be a little annoying, but keep in mind that because of these ads, you may sell with absolutely no fees, and buyers can get great deals bidding on items with no bidding fees.</p>
<hr>
<footer>
  <p>&copy;2018 Best auction SITE</p>
</footer>
</body>
<script>

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
</script>
</html>
