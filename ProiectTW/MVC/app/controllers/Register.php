<?php


require_once "../app/models/register_model.php";
class Register extends Controller
{
  public function index(){
      $this->view('Register/AuctioX-Register');
  }

  public function inregistreaza()
  {
  		$jsonData = file_get_contents('php://input');
  		$jsonData = json_decode($jsonData);

  		$username = $jsonData->username;
  		$password = $jsonData->password;
      $firstname = $jsonData->firstname;
  		$lastname = $jsonData->lastname;
  		$email = $jsonData->email;
      $telephone_number = $jsonData->telephone_number;
      $adress = $jsonData->adress;

  		$result = Regi::insertUser($username, $password, $firstname, $lastname,  $email, $telephone_number, $adress);
      echo $result;
}

  public function verificaEmail()
  {
 		$jsonData = file_get_contents('php://input');
 		$jsonData = json_decode($jsonData);

 		$username = $jsonData->username;
 	  $result = Regi::getUserName($username);
 		echo $result;
  }


}
