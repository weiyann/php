<?php

require 'connect_db.php';
# include __DIR__. '/connect_db.php';

$stmt = $pdo->query("SELECT * FROM address_book");
// $row = $stmt->fetch(PDO::FETCH_NUM); // 拿到的是索引式陣列
$row = $stmt->fetch(); // 預設 PDO::FETCH_ASSOC 拿到的是關聯式陣列

echo json_encode($row);