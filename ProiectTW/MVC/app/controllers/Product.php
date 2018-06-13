<?php

session_start();
require_once "../app/models/product_model.php";

class Product extends Controller
{
  public function index(){
      $this->view('Product/AuctioX-Product');
      print_r($_SESSION);
  }
}
