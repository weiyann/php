<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>
    <?= '內建的常數' ?>
  </title>
</head>

<body>
  <?= __DIR__ # 這支 php 所在的資料夾位置 
  ?><br>
  <?= __FILE__ # 這支 php 所在的位置 
  ?><br>
  <?= __LINE__ # 列數 
  ?><br>

  <?= false # 輸出時為空字串 
  ?><br>
  <?= TRUE # 布林值不區分大小寫 
  ?><br>


</body>

</html>