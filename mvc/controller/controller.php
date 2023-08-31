<?php

class productapp{
  public function __construct($productApi){
    $this->productApi = $productApi;
  }
  public function renderproduct(){
    $productlist = $this->productApi->getproducts();
    require_once 'views/productlistview.php';
  }
  public function renderselectedproduct($id){
    $selectedproduct = $this->productApi->getproduct($id);
    require_once 'views/productdetailview.php';
  }
}

$productctrl = new productapp($productmodel);
?>
