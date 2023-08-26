<?php
  include("database.php");

  if(!$conn){
    die('error in db'.mysqli_error($conn));
  }else{
    $id = $_GET['id'];
    $qry = "select * from user where id = $id";
    $run = $conn->query($qry);
    if($run -> num_rows>0){
      while($row = $run->fetch_assoc()){
        $name = $row['username'];
        $pass = $row['password'];
      }
    }
  }
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>User Updation</title>
  </head>
  <body>
    <form method="post" style="display: flex;">
      <label>Name</label>
      <input type="text" name="name" value="<?php echo "$name"; ?>"/><br>
      <label>Password</label>
      <input type="password" name="pass" value="<?php echo "$pass"; ?>"/><br>
      <input type="submit" name="update" value="update"/>
    </form>
  </body>
</html>
<?php
if (isset($_POST['update'])) {
  $name = $_POST['name'];
  $pass = $_POST['pass'];

  $qry = "update user set username='$name', password='$pass' where id = $id";
  if (mysqli_query($conn, $qry)) {
    header('location: user.php');
  }else {
    echo mysqli_error($db);
  }
}

 ?>
