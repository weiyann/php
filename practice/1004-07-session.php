<?php 
session_start(); # 啟用 session 的功能
if(! isset($_SESSION['sess'])){ # 如果沒有session ，就設定session=1
$_SESSION['sess'] = 1;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?= $_SESSION['sess']++ ?>
</body>
</html>