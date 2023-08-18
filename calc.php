<html>
  <body>
    <center>
      <br><br><br>
      <form method="post" action="">
        <input type="number" name="value1" placeholder="Number 1" required><br><br>
        <input type="number" name="value2" placeholder="Number 2" required><br><br>
        <select name="operation">
          <option value="Addition">Addition</option>
          <option value="Subtraction">Subtraction</option>
          <option value="Multiplication">Multiplication</option>
          <option value="Division">Division</option>
        </select><br><br>
        <input type="submit">
        <input type="reset">
      </form>
      <?php
      if ($_SERVER["REQUEST_METHOD"] == "POST") {
          $value1 = $_POST["value1"];
          $value2 = $_POST["value2"];
          $operation = $_POST["operation"];
          switch ($operation) {
              case "Addition":
                  $result = $value1 + $value2;
                  break;
              case "Subtraction":
                  $result = $value1 - $value2;
                  break;
              case "Multiplication":
                  $result = $value1 * $value2;
                  break;
              case "Division":
                  if ($value2 != 0) {
                      $result = $value1 / $value2;
                  } else {
                      $result = "The value is not divided by zero";
                  }
                  break;
          }
          echo "The Answer is $result.";
      }
      ?>
    </center>
  </body>
</html>
