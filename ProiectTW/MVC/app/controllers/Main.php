<?php

session_start();
require_once "../app/models/main_model.php";

class Main extends Controller
{
  public function index(){
      $this->view('Main/AuctioX-Main');
      print_r($_SESSION);
  }
  public function getEndToday(){

    $data = Mai::getEndTodayData();
    $data = json_encode($data);
    echo $data;
}
}
