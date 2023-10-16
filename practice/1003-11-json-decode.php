<?php

$str = '{"name":"小明","性別":"男生"}';

$ar1 = json_decode($str); # 拿到 object
$ar2 = json_decode($str, true);  # 拿到 array


echo "$ar1->name <br>";
echo "{$ar2['name']} <br>";
?>
