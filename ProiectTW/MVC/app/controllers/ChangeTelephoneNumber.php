<?php
session_start();
require_once "../app/models/changetelephonenumber_model.php";

class ChangeTelephoneNumber extends Controller
{
  public function index(){
      $this->view('ChangeTelephoneNumber/AuctioX-ChangeTelephoneNumber');
  }
  public function updateTelephoneNumber()
  {
      $jsonData = file_get_contents('php://input');
      $jsonData = json_decode($jsonData);

      $username = $_SESSION['username'];
      $telephone_number = $jsonData->telephone_number;

      $result = TelephoneNumber::updateTelephoneNumberM($username, $telephone_number);
      echo $result;
}
}
