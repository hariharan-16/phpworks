<?php
  include("database.php");

  if(!$conn){
    die('error in db'.mysqli_error($conn));
  }

  $id = $_GET['id'];
  $qry = "delete from user where id =$id ";
  if(mysqli_query($conn, $qry)){
    header('location: user.php');
  }else{
    echo mysqli_error($conn);
  }

?>
