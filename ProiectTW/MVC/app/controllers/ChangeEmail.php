<?php
session_start();
require_once "../app/models/changeemail_model.php";

class ChangeEmail extends Controller
{
  public function index(){
      $this->view('ChangeEmail/AuctioX-ChangeEmail');
  }
  public function updateEmail()
  {
      $jsonData = file_get_contents('php://input');
      $jsonData = json_decode($jsonData);

      $username = $_SESSION['username'];
      $email = $jsonData->email;

      $result = Email::updateEmailM($username, $email);
      echo $result;
}
}
