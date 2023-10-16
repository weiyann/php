<?php 
  setcookie("my_cookie","abc");
  // setcookie("my_cookie", "abc", time()+10); 設定期限秒數為10秒
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?= $_COOKIE["my_cookie"] ?>
</body>
</html>