<?php
session_start(); # 啟用 session 的功能
$users = [
  'shin' => [
    'hash' => '2345',
    'nickname' => '小新',
  ],
  'ming' => [
    'hash' => '7345',
    'nickname' => '大明',
  ],
];
# 先判斷是否有表單資料
if (isset($_POST['account'])) {
  $errInfo = '帳號或密碼錯誤';

  # 帳號是否正確
  if (isset($users[$_POST['account']])) {  #帳號輸入 shin 或 ming 得到 true 
    $item = $users[$_POST['account']];
    if (password_verify($_POST['password'],$item['hash'])) { #
      unset($errInfo); # 取消設定
      $_SESSION['admin'] = [
        'id' => $_POST['account'],
        'nickname' => $item['nickname'],
      ];
    } else {
      # 密碼是錯的
    }
  } else {
    # 帳號是錯的
  }
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
  <?php if (isset($_SESSION['admin'])) : ?>
    <h2><?= $_SESSION['admin']['nickname'] ?>您好</h2>
    <p><a href="logout.php">登出</a></p>
  <?php else : ?>
    <div style="color:red"><?= $errInfo ?? '' ?></div>
    <form action="" method="post">
      <input type="text" name="account" placeholder="帳號" value="<?= htmlentities($_POST['account'] ?? '') ?>"><br>

      <input type="password" name="password" placeholder="密碼" value="<?= htmlentities($_POST['password'] ?? '') ?>"><br>

      <button>登入</button>
    </form>
  <?php endif ?>
</body>

</html>