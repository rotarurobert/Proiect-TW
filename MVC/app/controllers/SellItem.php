<?php


require_once "../app/models/sellitem_model.php";
class SellItem extends Controller
{
  public function index(){
      $this->view('SellItem/AuctioX-SellItem');
  }
  public function adaugaInDB(){
    $jsonData = file_get_contents('php://input');
    $jsonData = json_decode($jsonData);

    $title = $jsonData->title;
    $price = $jsonData->price;
    $specialCharacteristics = $jsonData->specialCharacteristics;
    $conditions = $jsonData->conditions;
    $country = $jsonData->country;
    $description = $jsonData->description;

    $result = Sell::insertProduct($title, $price, $specialCharacteristics, $conditions,  $country, $description);
    echo $result;

  }
}
