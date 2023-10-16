<?php
require './parts/connect_db.php';

$sid=isset($_GET['sid']) ? intval($_GET['sid']) : 0;
if(!empty($sid)){
  $sql = "SELECT * FROM address_book WHERE sid={$sid}";
  $row = $pdo->query($sql)->fetch();
  echo json_encode($row,  JSON_UNESCAPED_UNICODE);
}else{
  header("Location: list.php");
}