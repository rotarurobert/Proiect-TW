 <?php
 require_once '../app/core/DB.php';
 class Searc
 {
    public function Count_item(){
    	$count=0;
    	if(isset($_GET['Categorie'])){
      	$database = DB::getConnection();
      	$categorie=$_GET['Categorie'];
      	if (!isset($_SESSION)){session_start();}
      	if(isset($_SESSION['search'])){
      		$search=$_SESSION['search'];
      		$sql= "SELECT * FROM products where ((name LIKE '%".$search."%') OR (description LIKE '%".$search."%')) and (enddate>=SYSDATE()) and (category like '%".$categorie."%')";
      	}
      	else{
      		$sql= "SELECT * FROM products where category like '%".$categorie."%' and enddate>=SYSDATE()";
      	}
      		$count=0;
	          $result=mysqli_query($database,$sql);
	          while($row = $result->fetch_assoc()){
	          	++$count;
	          }
	    }
		else{
			if(isset($_GET['Submit'])){
      			$database = DB::getConnection();
		      $search=$_GET['Search'];
		      if(isset($_SESSION['search'])){
		      	unset($_SESSION['search']);
		      }
		      if (!isset($_SESSION)){session_start();}
		      $_SESSION['search']=$search;
		      $min_length=3;
		      $count=0;
		      if(strlen($search)>=$min_length){
		  
		  
		          $sql= "SELECT * FROM products where ((name LIKE '%".$search."%') OR (description LIKE '%".$search."%')) and enddate>=SYSDATE()";
		          $result=mysqli_query($database,$sql);
		          while($row = $result->fetch_assoc()){
		          		++$count;
		}
	}
    }
}
	echo $count;
}
  
    public function Item_search(){
      if(isset($_GET['Submit'])){
      	$database = DB::getConnection();
	      $search=$_GET['Search'];
	      if(isset($_SESSION['search'])){
	      	unset($_SESSION['search']);
	      }
	      if (!isset($_SESSION)){session_start();}
	      $_SESSION['search']=$search;
	      $min_length=3;
	      $count=0;
	      if(strlen($search)>=$min_length){
	  
	  
	          $sql= "SELECT * FROM products where ((name LIKE '%".$search."%') OR (description LIKE '%".$search."%')) and enddate>=SYSDATE()";
	          $result=mysqli_query($database,$sql);
	          while($row = $result->fetch_assoc()){
	          		++$count;
	          		$descp =substr($row['description'], 0, 100) . '...';
	                echo '<div>
	            <form action= "http://localhost/ProiectTW/MVC/public/Product/AuctioX-Product.php" >
	            	<input type= "hidden" name="ID" value='.$row['product_id'].'>
	            	<input type ="image" src="image/img1.jpg"class="item-image">
	            </form>
	            <div class="item-description">
	              <p><b>'.$row['name'].'</b></p>
	              <p>'.$descp.'</p>
	              <p><b>Current bid: '.$row['start_price'].'$</b></p>
	            </div>
	            <div class="seller-description">
	              <p>Name:'.$row['seller'].'</p>
	              <p>Finish date: '.$row['enddate'].'</p>
	            </div>
	          </div>';
	            }
	      }
	    }
	    }

   	public function item_filter(){
    	if(isset($_GET['Categorie'])){
      		$database = DB::getConnection();
      	$categorie=$_GET['Categorie'];
      	if (!isset($_SESSION)){session_start();}
      	if(isset($_SESSION['search'])){
      		$search=$_SESSION['search'];
      		$sql= "SELECT * FROM products where ((name LIKE '%".$search."%') OR (description LIKE '%".$search."%')) and (enddate>=SYSDATE()) and (category like '%".$categorie."%')";
      	}
      	else{
      		$sql= "SELECT * FROM products where category like '%".$categorie."%' and enddate>=SYSDATE()";
      	}
      		$count=0;
	          $result=mysqli_query($database,$sql);
	          while($row = $result->fetch_assoc()){
	                $descp =substr($row['description'], 0, 100) . '...';
	                echo '<div>
	            <form action= "AuctioX-Product.php" >
	            	<input type= "hidden" name="ID" value='.$row['product_id'].'>
	            	<input type ="image" src="image/img1.jpg"class="item-image" >
	            </form>
	            <div class="item-description">
	              <p><b>'.$row['name'].'</b></p>
	              <p>'.$descp.'</p>
	              <p><b>Current bid: '.$row['start_price'].'$</b></p>
	            </div>
	            <div class="seller-description">
	              <p>Name:'.$row['seller'].'</p>
	              <p>Finish date: '.$row['enddate'].'</p>
	            </div>
	          </div>';
	            }
    }
	}
}
?>