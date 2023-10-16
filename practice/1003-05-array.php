<!-- <pre>標籤會忠實呈現空白  -->
<pre>
<?php

# 索引式標籤
$ar1 = array(2, 4, 6, 8);
$ar2 = [4, 6, 8, 10];

print_r($ar2);
var_dump($ar2);

echo  "\n $ar2[2] \n"; # \n 在" " 中會換行
echo "\n {$ar2['2']} \n";

?>
</pre>