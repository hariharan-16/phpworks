<html>
<head>
  <?php
    include("database.php");
  ?>
</head>
  <body>
    <form method="post" style="display: flex;">
      <label>Name</label>
      <input type="text" name="name" placeholder="Enter Username"/><br>
      <label>Password</label>
      <input type="password" name="pass" placeholder="Enter Password"/><br>
      <input type="submit" name="submit"/>
    </form>

    <h3>User List</h3>
    <table style="width: 80%;" border="1">
      <tr>
        <th>ID</th>
        <th>Username</th>
        <th>Password</th>
        <th>CRUD</th>
      </tr>
        <?php
          $i = 1;
          $qry = "select * from user";
          $run = $conn->query($qry);
          if($run -> num_rows>0){
            while($row = $run->fetch_assoc()){
              $id = $row['id'];
        ?>
      <tr>
        <td><?php echo $i++; ?></td>
        <td><?php echo $row['username']; ?></td>
        <td><?php echo $row['password']; ?></td>
        <td>
          <a href="update.php?id=<?php echo $id; ?>">Update</a>
          <a href="delete.php?id=<?php echo $id; ?>" onclick="return confirm('Are you Sure ?')">Delete</a>
        </td>
      </tr>
      <tr>
        <?php
            }
          }
        ?>
      </tr>
    </table>
  </body>
</html>
<?php
  if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $pass = $_POST['pass'];

    $qry = "insert into user(username, password) value('$name','$pass')";
    if(mysqli_query($conn, $qry)){
      echo "<script>alert('Registered..!!');</script>";
      header("location: user.php");
    }else{
      echo mysqli_error($conn);
    }
  }
?>
