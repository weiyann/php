<pre>
<?php
# $ar = []; # 說明的功能
for($i=1; $i<=42 ;$i++){
  $ar[] =$i; 
}
shuffle($ar); # 亂數排序
print_r($ar);

$br= count($ar); #取得陣列裡元素的個數
print_r($br); 
?>
</pre>