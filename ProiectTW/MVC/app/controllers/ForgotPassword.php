<?php
require_once "../app/models/forgotpassword_model.php";
require_once "../app/core/Email.php";
class ForgotPassword extends Controller
{
  public function index(){
      $this->view('ForgotPassword/AuctioX-ForgotPassword');
  }
  public function getEmailAdress()
  {
      $jsonData = file_get_contents('php://input');
      $jsonData = json_decode($jsonData);
      $username = $jsonData->username;

      $result  = ForgotPass::getEmailAddressM($username);
      $result1 = ForgotPass::getPasswordM($username);
      Email::sendEmail($result, "Hello! Your AuctioX password is: ".$result1);
      echo $result;
}
}
