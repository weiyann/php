<?php

require 'connect_db.php';
# include __DIR__. '/connect_db.php';

$stmt = $pdo->query("SELECT * FROM address_book LIMIT 5");
$rows = $stmt->fetchAll();

echo json_encode($rows);