<?php

class Logi{

    public static function getPasswordInDB($username){

         require_once '../app/core/DB.php';

         $database = DB::getConnection();

         $query = "SELECT password FROM users WHERE `username`=?";
         $stmt = $database->prepare($query);
         $stmt->bind_param("s", $username);
         $stmt->execute();
         $stmt->bind_result($passwordInDB);
         $stmt->fetch();
         echo $passwordInDB;

        $stmt->close();
     }
}
