<html>
  <?php
    include("database.php");
  ?>
  <body>
    <center>
    <form method="post" action="">
      <br><br>
      <input type="text" name="username" placeholder="Enter Username"><br><br>
      <input type="password" name="password" placeholder="Enter Password"><br><br>
      <input type="submit" name="submit" value="Register">
      <input type="reset">
    </form>
    <?php
      if($_SERVER["REQUEST_METHOD"] == "POST"){
        $username = $_POST["username"];
        $password = $_POST["password"];

        if(empty($username)){
          echo "Please enter your Username..!!";
        }elseif(empty($password)) {
          echo "Please enter your Password..!!";
        }else{
          $sql = "INSERT INTO users (username, password) VALUES ('$username','$password')";
          try {
            mysqli_query($conn, $sql);
            echo "Username and Password are Registered..!!";
          } catch (mysqli_sql_exception) {
            echo "Username is taken..!!";
          }
        }
      }
    ?>
    </center>
  </body>
  <?php
    mysqli_close($conn);
  ?>
</html>
