<?php

$a = isset($_POST['a']) ? intval($_POST['a']) : 0;
$b = !empty($_POST['b']) ? floatval($_POST['b']) : 0;

echo $a+$b;
/*
  intval(): 轉換成整數
  floatval(): 轉換成浮點數
  empty(): 測試裡面的值是否為 "空"
*/