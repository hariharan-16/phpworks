<?php

  require_once 'model/model.php';
  require_once 'controller/controller.php';

  $productctrl->renderproduct();

  if (isset($_GET['id'])) {
    $productctrl->renderselectedproduct($_GET['id']);
  }
?>
