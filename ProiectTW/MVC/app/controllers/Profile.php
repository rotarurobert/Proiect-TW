<?php


require_once "../app/models/profile_model.php";

class Profile extends Controller
{
  public function index(){
      $this->view('Profile/AuctioX-Profile');
  }
  public function getUserProfileInformation(){

    $username = $_SESSION['username'];

    $data = Profi::getPersonalInfoData($username);
    $data = json_encode($data);

    echo $data;
}
}
