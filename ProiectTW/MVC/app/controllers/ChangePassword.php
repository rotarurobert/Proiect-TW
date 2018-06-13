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
      $result = Password::getPassword($username);
      if($result = $password){
        return 1;
      }
      else
      {
        return 0;
      }
    }

      public function updatePassword()
      {
      		$jsonData = file_get_contents('php://input');
      		$jsonData = json_decode($jsonData);

      		$username = $_SESSION['username'];
      		$password = $jsonData->password;

      		$result = Password::updatePassword($username, $password);
          echo $result;
    }
  }
