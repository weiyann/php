<?php 
require './parts/connect_db.php';

$sql = "SELECT * FROM categories";

$rows = $pdo->query($sql)->fetchAll();

echo json_encode($rows, JSON_UNESCAPED_UNICODE);