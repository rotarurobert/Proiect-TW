<?php
session_start();
require_once "../app/models/changepassword_model.php";

class ChangePassword extends Controller
{
  public function index(){
      $this->view('ChangePassword/AuctioX-ChangePassword');
  }
  public function getPassword(){

      $jsonData = file_get_contents('php://input');
      $jsonData = json_decode($jsonData);

      $password = $jsonData->oldpassword;
      $username = $_SESSION['username'];
      $result = Password::getPasswordM($username);
      if($password != $result)
      {
       echo 0;
      }
      else
      {
       echo 1;
      }
    }

      public function updatePassword()
      {
      		$jsonData = file_get_contents('php://input');
      		$jsonData = json_decode($jsonData);

      		$username = $_SESSION['username'];
      		$password = $jsonData->password;

      		$result = Password::updatePasswordM($username, $password);
          return $result;
    }
  }
