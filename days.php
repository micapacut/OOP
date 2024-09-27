<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Days of the Week</title>
  <link rel="stylesheet" type="text/css" href="days.css">
</head>
<body>
<h1>Days of the Week</h1>
  <form method="post">
    <input type="submit" name="day" value="Monday"><br>
    <input type="submit" name="day" value="Tuesday"> <br>
    <input type="submit" name="day" value="Wednesday"><br>
    <input type="submit" name="day" value="Thursday"><br>
    <input type="submit" name="day" value="Friday"><br>
    <input type="submit" name="day" value="Saturday"><br>
    <input type="submit" name="day" value="Sunday"><br>
  </form>

  <?php
    if (isset($_POST["day"])) {
      $selectedDay = $_POST["day"];
      echo "<h1>You clicked: " . $selectedDay . "</h1>";
    } else {
      echo "<h1>Please select a day.</h1>";
    }
  ?>
  
</body>
</html>
