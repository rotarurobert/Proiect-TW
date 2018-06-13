<!DOCTYPE html>
<html>
<meta charset="utf-8">
  <title>Profile</title>
  <link rel="stylesheet" href="~/../../public/css/AuctioX-Profile.css">
    <script type="text/javascript" src="~/../../public/Scripts/Profile.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
<body onload="getProfileInformation()">



   <div>
    <ul>
      <li>                                                      <a href = "http://localhost/ProiectTW/MVC/public/ChangePassword">        <button type="button">Change Password</button> </a> </li>
      <li>First-Name:       <span id="first_name"></span>       </li>
      <li>Last-Name:        <span id="last_name"></span>        </li>
      <li>Email:            <span id="email"></span>            <a href = "http://localhost/ProiectTW/MVC/public/ChangeEmail">           <button type="button">Change Email</button> </a></li>
      <li>Address:          <span id="adress"></span>           <a href = "http://localhost/ProiectTW/MVC/public/ChangeAddress">         <button type="button">Change Address</button> </a></li>
      <li>Telephone-Number: <span id="telephone_number"></span> <a href = "http://localhost/ProiectTW/MVC/public/ChangeTelephoneNumber"> <button type="button">Change Telephone-Number</button> </a></li>

    </ul>
  </div>
</div>
</body>
</html>
