<?php
session_start();
require_once "../app/models/changeaddress_model.php";

class ChangeAddress extends Controller
{
  public function index(){
      $this->view('ChangeAddress/AuctioX-ChangeAddress');
  }
  public function updateAddress()
  {
      $jsonData = file_get_contents('php://input');
      $jsonData = json_decode($jsonData);

      $username = $_SESSION['username'];
      $adress = $jsonData->adress;

      $result = Address::updateAddressM($username, $adress);
      echo $result;
}
}
