<?php

class Email{
  public static function updateEmailM($username, $email)
  {
        require_once '../app/core/DB.php';
        $database = DB::getConnection();
        $queryInsert = "UPDATE users SET email = ? WHERE username =?";
        $stmt1 = $database->prepare($queryInsert);
        $stmt1->bind_param("ss", $email, $username);
        $stmt1->execute();
        $stmt1->close();
  }


}
