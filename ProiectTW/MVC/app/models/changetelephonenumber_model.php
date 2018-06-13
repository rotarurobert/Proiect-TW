<?php

class TelephoneNumber{
  public static function updateTelephoneNumberM($username, $telephone_number)
  {
        require_once '../app/core/DB.php';
        $database = DB::getConnection();
        $queryInsert = "UPDATE users SET telephone_number = ? WHERE username =?";
        $stmt1 = $database->prepare($queryInsert);
        $stmt1->bind_param("ss", $telephone_number, $username);
        $stmt1->execute();
        $stmt1->close();
  }
}
