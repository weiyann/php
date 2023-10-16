<?php 
session_start(); # 啟用 session 的功能

$users=[

]

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <pre><?php print_r($_POST) ?></pre>

  <form action="" method="post">
  <input type="text" name="account" placeholder="帳號"
  value="<?= htmlentities($_POST['account'] ?? '') ?>"><br>
  <!-- $_POST['account'] ?? '' 如果$_POST['account']不是undefined，回傳$_POST['account']，如果undefined，回傳'' -->
  <input type="password" name="password" placeholder="密碼"
  value="<?= htmlentities($_POST['password'] ?? '') ?>"><br>
  <!-- htmlentities()做html的跳脫，文字可能有" -->
  <button>登入</button>
  </form>
</body>
</html>