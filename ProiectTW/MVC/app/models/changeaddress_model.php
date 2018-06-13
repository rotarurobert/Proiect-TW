<?php

class Address{
  public static function updateAddressM($username, $adress)
  {
        require_once '../app/core/DB.php';
        $database = DB::getConnection();
        $queryInsert = "UPDATE users SET adress = ? WHERE username =?";
        $stmt1 = $database->prepare($queryInsert);
        $stmt1->bind_param("ss", $adress, $username);
        $stmt1->execute();
        $stmt1->close();
  }



}
