<?php
session_start();
class Sell{
  public static function insertProduct($title, $price, $specialCharacteristics, $condition, $country, $description, $category, $endDate)
  {
        require_once '../app/core/DB.php';
        $database = DB::getConnection();
        $queryInsert = "INSERT INTO products(`seller`, `name`, `start_price`, `specialCharacteristics`, `condition`, `country`, `description`, `category`, `enddate`) values(?,?,?,?,?,?,?,?,?)";
        $stmt1 = $database->prepare($queryInsert);
        $stmt1->bind_param("ssissssss",$_SESSION['username'] , $title, $price, $specialCharacteristics, $condition, $country, $description, $category, $endDate);
        $stmt1->execute();
        $stmt1->close();
  }

}
