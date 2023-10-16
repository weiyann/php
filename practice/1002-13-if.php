<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>if</title>
</head>
<body>
  <?php
  $age = empty($_GET['age']) ? 0 : intval($_GET['age']); 
  if($age >=18 ){
    echo '您好';
  } else {
    echo '請勿進入';
  }
  ?> 

</body>
</html>