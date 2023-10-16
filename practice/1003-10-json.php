<?php

$ar1 =array(
  'name' => '小新',
  'age' => 25,
  'data' => 'abc/def'
);

// echo json_encode($ar1,JSON_UNESCAPED_UNICODE,JSON_UNESCAPED_SLASHES); #讓文字,斜線不要跳脫
echo json_encode($ar1,JSON_UNESCAPED_UNICODE,JSON_PRETTY_PRINT);

?>
