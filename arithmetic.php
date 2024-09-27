<?php
  
  $num1 = "";
  $num2 = "";
  $sum = "";
  $difference = "";
  $product = "";
  $quotient = "";
  $modulo = "";

  
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];

   
    $sum = $num1 + $num2;
    $difference = $num1 - $num2;
    $product = $num1 * $num2;
    if ($num2 != 0) {
      $quotient = $num1 / $num2;
      $modulo = $num1 % $num2;
    } else {
      $quotient = "Cannot divide by zero!";
      $modulo = "Cannot divide by zero!";
    }
  }
?>


<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">


<link rel="stylesheet" type="text/css" href="style.css">

<div class="container">
  <h1>Arithmetic</h1>
  <form method="post">
    <div class="form-group">
      <label for="num1">First Number:</label>
      <input type="number" class="form-control" id="num1" name="num1" value="<?php echo $num1; ?>">
    </div>
    <div class="form-group">
      <label for="num2">Second Number:</label>
      <input type="number" class="form-control" id="num2" name="num2" value="<?php echo $num2; ?>">
    </div>
    <button type="submit" class="btn btn-primary">Calculate</button>
  </form>

  <div class="results">
    <h2>Results:</h2>
    <p>Sum: <?php echo $sum; ?></p>
    <p>Difference: <?php echo $difference; ?></p>
    <p>Product: <?php echo $product; ?></p>
    <p>Quotient: <?php echo $quotient; ?></p>
    <p>Modulo: <?php echo $modulo; ?></p>
  </div>
</div>
