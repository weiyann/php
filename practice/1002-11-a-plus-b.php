<?php
// sleep(15);
$a = isset($_GET['a']) ? intval($_GET['a']) : 0;
$b = !empty($_GET['b']) ? floatval($_GET['b']) : 0;

// isset 主要用於檢查變數是否存在。
// !empty 主要用於確保變數既存在且有值。

echo $a+$b;
/*
  intval(): 轉換成整數
  floatval(): 轉換成浮點數
  empty(): 測試裡面的值是否為 "空"
*/