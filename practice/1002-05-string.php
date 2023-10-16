<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>字串</title>
</head>

<body>
  <?php
  $name = 'Yann';
  $age = 20;

  echo "${name}:${age}<br>"; # 不建議使用
  echo "{$name}:{$age}<br>"; # 大括號裡不能做運算
  echo '{$name}:${age}<br>'; # 單引號直接呈現字串內容
  echo "{$name}:
  
  {$age}<br>";  # 字串中間可以直接換行

  $a = "xyz\nabc\"def\'ghi\\";
  $b = 'xyz\nabc\"def\'ghi\\';
  echo $a ;
  echo $b;
  ?>
</body>

</html>