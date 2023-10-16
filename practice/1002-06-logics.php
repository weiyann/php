<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>邏輯運算子</title>
</head>

<body>
  <?php
  $a = 10;
  $b = 20;

  echo $a and $b;
  echo '<br>';
  echo $a && $b;
  echo '<br>';
  
  echo var_dump($a and $b); # var_dump() 查看變數或值的內容
  echo '<br>';
  echo var_dump($a && $b); # 函式名稱 (方法名稱) 不區分大小寫
  echo '<br>';

  ?>
</body>

</html>