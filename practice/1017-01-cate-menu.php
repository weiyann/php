<?php
require __DIR__ . '/connect_db.php';

$stmt = $pdo->query("SELECT * FROM categories ORDER BY sid DESC");
$rows = $stmt->fetchAll();
$first = [];
foreach ($rows as &$r) {
  if ($r['parent_sid'] == 0) {
    $first[] = &$r; #把第⼀層的資料放到陣列裡
  }
}
foreach ($first as &$f) {
  foreach ($rows as &$r) {
    if ($f['sid'] == $r['parent_sid']) {
      $f['children'][] = &$r; #把第⼆層的資料放到陣列裡
    }
  }
}
echo json_encode($first);
