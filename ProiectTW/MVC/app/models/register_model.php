<?php

class Regi{

    public static function insertUser($username, $password, $first_name, $last_name, $email, $telephone_number, $adress)
    {
          require_once '../app/core/DB.php';
          $database = DB::getConnection();
          $queryInsert = "INSERT INTO users(username, password, first_name, last_name, email, telephone_number, adress) values(?,?,?,?,?,?,?)";
          $stmt1 = $database->prepare($queryInsert);
          $stmt1->bind_param("sssssss", $username, $password, $first_name, $last_name, $email, $telephone_number, $adress);
          $stmt1->execute();
          $stmt1->close();
    }

    public static function getUserName($username)
    {
         require_once '../app/core/DB.php';
         $database = DB::getConnection();
         $query = "SELECT count(*) FROM users WHERE `username`=?";
         $stmt = $database->prepare($query);
         $stmt->bind_param("s", $username);
         $stmt->execute();
         $stmt->bind_result($userNameInDBCounter);
         $stmt->fetch();
          if($userNameInDBCounter == 0){
              return 1;
          }
          else
          {
              return 0;
          }
           echo $userNameInDBCounter;
         $stmt->close();
     }
}
