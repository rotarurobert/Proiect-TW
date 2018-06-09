<?php
session_start();
class Sell{
  public static function insertProduct($title, $price, $specialCharacteristics, $conditions,  $country, $description)
  {
        require_once '../app/core/DB.php';
        $database = DB::getConnection();
        $queryInsert = "INSERT INTO products(seller, title, price, specialCharacteristics, conditions, country, description) values(?,?,?,?,?,?,?)";
        $stmt1 = $database->prepare($queryInsert);
        $stmt1->bind_param("sssssss",$_SESSION['username'] , $title, $price, $specialCharacteristics, $conditions,  $country, $description);
        $stmt1->execute();
        $stmt1->close();
  }

}
