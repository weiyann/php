<pre>
<?php

# 關聯式標籤, 相當於 JavaScript 的 Object
$ar3 = array(
  'male',
  'name' => 'Yann',
  'age' => 25,
  'hello',
);
$ar4 = [
  'name' => 'Yann',
  'age' => 25,
];

print_r($ar3);
var_dump($ar3);

echo  "\n {$ar4['name']} \n";
echo "\n {$ar4['age']} \n";

?>
</pre>