<?php

session_start();
require_once "../app/models/search_model.php";

class Search extends Controller
{
  public function index(){
      $this->view('Search/AuctioX-Search');
      print_r($_SESSION);
  }
}
