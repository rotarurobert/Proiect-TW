<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="~/../../css/AuctioX-Product.css">
  <script type="text/javascript" src="back-end/countdown.js"></script>
	<title>Product</title>
</head>
<header>
  <div class="navbar">
    <ab>Hi, <a href="AuctioX-SignIn.html">Sign In</a> or <a href="AuctioX-Register.html">Register<a></ab>
    <a href="AuctioX-Main.html#A"><ab>DailyDeals</ab>
    <a href="AuctioX-SellItem.html"><ab>Sell</ab></a>
    <a href="#LogOut"><ab style ="float:right">LogOut</ab></a>
  </div>

  <div class="bar">
          <a href="AuctioX-Main.html"><ab>Home</ab></a>
          <a href="AuctioX-personaldate.html"><ab>My Account</ab></a>
          <a href="AuctioX-ForgotPassword.html"><ab style ="float:right">Forgot Password</a>
          <form action="http://localhost/ProiectTW/MVC/public/Search/AuctioX-Search.php" method="GET">
            <input type="submit" value="Search" name="Submit" style ="float:right">
            <input type="text" name="Search" placeholder="Search.."style ="float:right">
          </form>
  </div>
</header>
<body>
<div class="flex-container">
  <div>
    <div class="item-image">
      <div class="gallery" >
        <a target="_blank" href="image/car.jpg">
          <img src="image/car.jpg" style="max-height: 50%;  max-width:100%; clear: right; overflow: auto;">
        </a>
      </div>
      <div class="gallery">
        <a target="_blank" href="image/car1.jpg">
          <img src="image/car1.jpg" >
        </a>
      </div>
      <div class="gallery">
        <a target="_blank" href="image/car2.jpg">
          <img src="image/car2.jpg" >
        </a>
      </div>
    </div>
    <div>
      <?php Prod::item_description();?>
    </div>
  </div>
</div>
</div>
</body>
</html>


