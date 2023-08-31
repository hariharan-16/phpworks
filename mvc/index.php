<?php

  require_once 'model/productmodel.php';
  require_once 'controller/productcontroller.php';

  $productctrl->renderproduct();

  if (isset($_GET['id'])) {
    $productctrl->renderselectedproduct($_GET['id']);
  }
?>
