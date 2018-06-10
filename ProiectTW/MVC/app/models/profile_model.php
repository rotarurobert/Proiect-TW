<?php

class Profi{
  public static function getPersonalInfoData($username){
        $personalInfoData['first_name'] = self::getFirstName($username);
        $personalInfoData['last_name'] = self::getLastName($username);
        $personalInfoData['telephone_number'] = self::getTelephone_number($username);
        $personalInfoData['email'] = self::getEmail($username);
        $personalInfoData['adress'] = self::getAdress($username);
        return $personalInfoData;
    }

    private static function getFirstName($username){
        require_once '../app/core/DB.php';
        $database = DB::getConnection();

        $query = "SELECT `first_name` FROM `users` WHERE `username`=?";
        $stmt = $database->prepare($query);
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $stmt->bind_result($first_name);
        $stmt->fetch();

        return $first_name;

        $stmt->close();
    }

    private static function getLastName($username){
        require_once '../app/core/DB.php';
        $database = DB::getConnection();

        $query = "SELECT `last_name` FROM `users` WHERE `username`=?";
        $stmt = $database->prepare($query);
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $stmt->bind_result($last_name);
        $stmt->fetch();

        return $last_name;

        $stmt->close();
    }

    private static function getTelephone_number($username){
        require_once '../app/core/DB.php';
        $database = DB::getConnection();

        $query = "SELECT `telephone_number` FROM `users` WHERE `username`=?";
        $stmt = $database->prepare($query);
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $stmt->bind_result($telephone_number);
        $stmt->fetch();

        return $telephone_number;

        $stmt->close();
    }

    private static function getEmail($username){
        require_once '../app/core/DB.php';
        $database = DB::getConnection();

        $query = "SELECT `email` FROM `users` WHERE `username`=?";
        $stmt = $database->prepare($query);
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $stmt->bind_result($email);
        $stmt->fetch();

        return $email;

        $stmt->close();
    }
    private static function getAdress($username){
        require_once '../app/core/DB.php';
        $database = DB::getConnection();

        $query = "SELECT `adress` FROM `users` WHERE `username`=?";
        $stmt = $database->prepare($query);
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $stmt->bind_result($adress);
        $stmt->fetch();

        return $adress;

        $stmt->close();
    }




}
