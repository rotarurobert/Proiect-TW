<?php


require_once "../app/models/login_model.php";

class Login extends Controller
{
  public function index(){
      $this->view('Login/AuctioX-Login');
  }
}
