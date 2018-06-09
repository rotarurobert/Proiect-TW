<?php

session_start();

require_once "../app/models/login_model.php";

class Login extends Controller
{
  public function index(){
      $this->view('Login/AuctioX-Login');
  }
  public function verificaUsername()
  {
 		$jsonData = file_get_contents('php://input');
 		$jsonData = json_decode($jsonData);
 		$username = $jsonData->username;
     $_SESSION['username'] = $username;
 	  $result = Logi::getPasswordInDB($username);
  	echo $result;

  }
}
