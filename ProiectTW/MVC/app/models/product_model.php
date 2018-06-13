<?php
require_once '../app/core/DB.php';
	class Prod{
    
    public function item_description(){
      if(isset($_GET['ID'])){
        $database = DB::getConnection();
        $id=$_GET['ID'];
        $sql = "SELECT * FROM products where product_id=".(int)$id."";
        $result=mysqli_query($database, $sql);
        if($row = $result->fetch_assoc()){
            echo '<div class="item-description">
          <p>&nbsp;'.$row['description'].'</p>
          <div class="seller-description">
                  <p><b>Current bid : '.$row['start_price'].'€</b></p>
                  <p>Time remaining: <p id="demo"></p></p>
          </div>
          <form method="POST" action="Bid()">
            <input type="hidden" value="'.$row['product_id'].'" ID="ID">
            <input type="hidden" value="'.$_SESSION['username'].'" ID="seller">
            <input type="number" name="Bid" class="text-box">
            <input type="submit" value="Bid Now"  class="block">
          </form>
          <form method="POST" action="AuctioX-Profile.php">
            <input type="submit" value="Seller Info"  class="block">
          </form>

        </div>
      </div>';
      }
}
}
    public function bid(){
      if(isset($_POST['Bid'])){
        $database = DB::getConnection();
        $bid=$_POST['Bid'];
        $id=$_POST['ID'];
        $aux=$bid;
        $sql ="SELECT * FROM products where product_id=".(int)$id."";
        $result=mysqli_query($database, $sql);
        if($row = $result->fetch_assoc()){
          $old_start_price=(int)$row['start_price'];
          $bid=(int)$aux;
          if($old_start_price>=$bid){
            header("Location: {$_SERVER['HTTP_REFERER']}");
          }
          else{
            $sql1="UPDATE products set start_price=".(int)$bid." WHERE product_id=".(int)$id."";
            $result=mysqli_query($database, $sql1);
            header("Location: {$_SERVER['HTTP_REFERER']}");
          }

      
    }
          }
      }

}


