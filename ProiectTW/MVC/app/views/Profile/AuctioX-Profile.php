<!DOCTYPE html>
<html>
<meta charset="utf-8">
  <title>Profile</title>
  <link rel="stylesheet" href="~/../../public/css/AuctioX-Profile.css">
    <script type="text/javascript" src="~/../../public/Scripts/Profile.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
<body onload="getProfileInformation()">

  <nav class="nav">
    <ul class="navBar">
      <li class="listanga"><a href="http://localhost/ProiectTW/MVC/public/Main/AuctioX-Main.php">Home</a></li>
      <li><a href="#A">EndToday</a></li>
      <li><a href="http://localhost/ProiectTW/MVC/public/SellItem">Sell</a></li>
      <li>My Account
        <ul class="navBar">
          <li><a href="http://localhost/ProiectTW/MVC/public/Profile">Profile</a></li>
          <li><a href="">Items on Sell</a></li>
          <li><a href="">Items Bought</a></li>
        </ul>
      </li>
      <li class="listadreapta"><a href="http://localhost/ProiectTW/MVC/public/Logout">LogOut</a></li>
    </ul>
    <form class="search-form">
      <input type="text" placeholder="Search">
      <a href=""><button type="button">Search</button></a>
    </form>
  </nav>



   <div class="top2">
    <ul>
      <li>                                                      <a href = "http://localhost/ProiectTW/MVC/public/ChangePassword">        <button type="button">Change Password</button> </a> </li>
      <li>First-Name:       <span id="first_name"></span>       </li>
      <li>Last-Name:        <span id="last_name"></span>        </li>
      <li>Email:            <span id="email"></span>            <a href = "http://localhost/ProiectTW/MVC/public/ChangeEmail">           <button type="button">Change Email</button> </a></li>
      <li>Address:          <span id="adress"></span>           <a href = "http://localhost/ProiectTW/MVC/public/ChangeAddress">         <button type="button">Change Address</button> </a></li>
      <li>Telephone-Number: <span id="telephone_number"></span> <a href = "http://localhost/ProiectTW/MVC/public/ChangeTelephoneNumber"> <button type="button">Change Telephone-Number</button> </a></li>

    </ul>
  </div>

</body>
</html>
