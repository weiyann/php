<pre>
<?php

$ar1 =array(
  'name' => '小新',
  'age' => 25,
);

$ar2 = $ar1; # 複製後設定 (設定值)
$ar3 = &$ar1; # 設定位址 (參照), 指到相同的陣列

$ar1['age'] = 30;

print_r([
  'ar1' => $ar1,
  'ar2' => $ar2,
  'ar3' => $ar3,
])
?>
</pre>