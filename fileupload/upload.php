<?php include_once 'database.php'; ?>

<html>
<body>
  <form enctype="multipart/form-data" action="upload.php" method="POST">
    <input type="file" name="uploaded_file"></input><br />
    <input type="submit" value="Upload"></input>
  </form>
</body>
</html>


<?PHP
  if(!empty($_FILES['uploaded_file']))
  {
    $file = rand(1000,100000)."-".$_FILES['uploaded_file']['name'];
    $file_loc = $_FILES['uploaded_file']['tmp_name'];
    $file_size = $_FILES['uploaded_file']['size'];
    $file_type = $_FILES['uploaded_file']['type'];

    $new_size = $file_size/1024;
    $new_file_name = strtolower($file);
    $final_file=str_replace(' ','-',$new_file_name);

    $folder = "uploads/";
    $path = $folder . basename( $_FILES['uploaded_file']['name']);

    if(move_uploaded_file($file_loc,$folder.$final_file)) {
      $sql="INSERT INTO image(file,type,size) VALUES('$final_file','$file_type','$new_size')";
      mysqli_query($conn,$sql);

      echo "The file has been uploaded";
    } else{
        echo "There was an error uploading the file, please try again!";
    }
  }
?>
