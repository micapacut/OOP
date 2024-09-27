<?php
 $num1 = $_POST["num1"];
 $num2 = $_POST["num2"];

 $sum = $num1 + $num2;
 $difference = $num1 - $num2;
 $quotient = $num1 / $num2;
 $product = $num1 * $num2;
 $modulo = $num1 %  $num2;

 echo "First Number is $num1 </p>";
 echo "<p>Second Number is $num2 </p>";
 echo "<p>The sum of $num1 and $num2 is: $sum</p>";
 echo "<p>The difference of $num1 and $num2  is: $difference</p>";
 echo "<p>The quotient of $num1 and $num2  is: $quotient</p>";
 echo "<p>The product of $num1 and $num2  is: $product</p>";
 echo "<p>The modulo of $num1 and $num2  is: $modulo</p>";
?>