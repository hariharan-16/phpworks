<?php

class Product{
  public $products = [];
  public function getproducts(){
    return $this->products = [
      ['name' => 'Iphone', 'os' => 'IOS'],
      ['name' => 'Motorola', 'os' => 'Android'],
      ['name' => 'Nokia Lumia', 'os' => 'Windows'],
    ];
  }
  public function getproduct($index){
    return $this->products[$index];
  }
}

  $productmodel = new Product;

?>
