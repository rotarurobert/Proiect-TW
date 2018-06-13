<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="~/../../css/AuctioX-Search.css">
	<script type="text/javascript" src="back-end/pick-one.js"></script>
	<title>Search</title>
</head>
<header>
  <div class="navbar">
    <ab><a href="AuctioX-SignIn.html">Sign In</a> or <a href="AuctioX-Register.html">Register<a></ab>
    <a href="AuctioX-Main.html#A"><ab>DailyDeals</ab>
    <a href="AuctioX-SellItem.html"><ab>Sell</ab></a>
    <a href="#LogOut"><ab style ="float:right">LogOut</ab></a>
  </div>

  <div class="bar">
          <a href="AuctioX-Main.html"><ab>Home</ab></a>
          <a href="AuctioX-personaldate.html"><ab>My Account</ab></a>
          <a href="AuctioX-ForgotPassword.html"><ab style ="float:right">Forgot Password</a>
          <form action="" method="GET">
          	<input type="submit" value="Search" name="Submit" style ="float:right">
            <input type="text" name="Search" placeholder="Search.."style ="float:right">
          </form>
  </div>
</header>
<body>
		<section class="main">
		<div class="center">
			<div class="sidenav">
		<p style="margin-left: 5%; margin-top: 30%;"><b>Categorii:</b></p>
		<ul style="list-style-type:none;" >
		<form method="GET" id="Categorii" action="">
			<li><input type="checkbox" name="Categorie" value="Auto" onClick="return KeepCount()">Auto</li>
			<li><input type="checkbox" name="Categorie" value="Mobila" onClick="return KeepCount()">Mobila</li>
			<li><input type="checkbox" name="Categorie" value="Telefoane" onClick="return KeepCount()">Telefoane</li>
			<li><input type="checkbox" name="Categorie" value="Electrocasnice" onClick="return KeepCount()">Electrocasnice</li>
			<li><input type="checkbox" name="Categorie" value="Media" onClick="return KeepCount()">Media</li>
			<li><input type="checkbox" name="Categorie" value="Altele" onClick="return KeepCount()">Altele</li>
			<li><input type="submit" value="Aplica" onclick="">
		</form>
		</ul>
	</div>
		<h2 style="color: white">Results found: <?php Searc::Count_item(); ?></h2>
	  	<div class="flex-container" >
         <?php Searc::Item_search();
         	Searc::item_filter(); 
         ?>
		  </div>
		</div>
	
	</section>
</body>
</html>
