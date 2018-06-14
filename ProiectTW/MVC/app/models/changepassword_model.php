<?php

class Password{
  public static function getPasswordM($username)
  {
       require_once '../app/core/DB.php';
       $database = DB::getConnection();
       $query = "SELECT password FROM users WHERE `username`=?";
       $stmt = $database->prepare($query);
       $stmt->bind_param("s", $username);
       $stmt->execute();
       $stmt->bind_result($passwordInDB);
       $stmt->fetch();
        return $passwordInDB;
       $stmt->close();
   }

   public static function updatePasswordM($username, $password)
   {
         require_once '../app/core/DB.php';
         $database = DB::getConnection();
         $queryInsert = "UPDATE users SET password = ? WHERE username =?";
         $stmt1 = $database->prepare($queryInsert);
         $stmt1->bind_param("ss", $password, $username);
         $stmt1->execute();
         $stmt1->close();
   }
}
