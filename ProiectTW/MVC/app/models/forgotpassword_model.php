<?php

class ForgotPass{
  public static function getEmailAddressM($username)
  {

             require_once '../app/core/DB.php';

             $database = DB::getConnection();

             $query = "SELECT email FROM users WHERE `username`=?";
             $stmt = $database->prepare($query);
             $stmt->bind_param("s", $username);
             $stmt->execute();
             $stmt->bind_result($email);
             $stmt->fetch();
             return $email;

            $stmt->close();
         }
  public static function getPasswordM($username)
  {

        require_once '../app/core/DB.php';
        $database = DB::getConnection();

        $query = "SELECT password FROM users WHERE `username`=?";
        $stmt = $database->prepare($query);
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $stmt->bind_result($password);
        $stmt->fetch();
        return $password;

                   $stmt->close();
                }
  }
