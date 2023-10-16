<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>邏輯運算子</title>
</head>

<body>
  <?php
  $a = 10 && 15;
  $b = 10 and 15; # and 的優先權比 = 還要低
  $c = (10 and 15); # and 的優先權比 = 還要低
  
  echo "\$a: $a <br>";
  echo "\$b: $b <br>";
  echo "\$c: $c <br>";

  ?>
</body>

</html>