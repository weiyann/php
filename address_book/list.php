<?php
require './parts/connect_db.php';
$pageName = 'list';
$title = '列表';

$perPage = 25; # 一頁最多20筆

$page = isset($_GET['page']) ? intval($_GET['page']) : 1;
if ($page < 1) {
  header('Location: ?page=1'); #頁面轉向
  exit; # 直接結束這支 php
}

$t_sql = "SELECT COUNT(1) FROM address_book";
# 總筆數
$totalRows = $pdo->query($t_sql)->fetch(PDO::FETCH_NUM)[0];

# 預設值
$totalPages = 0;
$rows = [];

// 有資料時
if ($totalRows > 0) {
  # 總頁數
  $totalPages = ceil($totalRows / $perPage); # 無條件進位，不足20筆也算一頁
  if ($page > $totalPages) {
    header('Location: ?page=' . $totalPages); #頁面轉向最後一頁
    exit;
  }
};

$sql = sprintf(
  'SELECT * FROM address_book ORDER BY sid DESC LIMIT %s, %s',
  ($page - 1) *  $perPage,
  $perPage
);
$rows = $pdo->query($sql)->fetchAll();
?>

<?php include './parts/html_head.php' ?>
<?php include './parts/navbar.php' ?>


<div class="container">
  <div class="row">
    <div class="col">
      <nav aria-label="Page navigation example">
        <ul class="pagination">
          <li class="page-item <?=$page ==1 ? 'disabled':''?>">
            <a class="page-link" href="?page=1">
            <i class="fa-solid fa-angles-left"></i>
            </a>
          </li>
          <?php for ($i = $page - 3; $i <= $page + 3; $i++) :
            if ($i >= 1 and $i <= $totalPages) : ?>
              <li class="page-item <?= $i == $page ? 'active' : '' ?>">
                <a class="page-link" href="?page=<?= $i ?>"><?= $i ?></a>
              </li>
          <?php
            endif;
          endfor; ?>
          <li class="page-item <?=$page ==$totalPages ? 'disabled':''?>">
            <a class="page-link" href="?page=<?= $totalPages?>">
            <i class="fa-solid fa-angles-right"></i></a>
          </li>
        </ul>
      </nav>
    </div>
  </div>
  <div><?= "總共 $totalRows 筆/總共$totalPages 頁" ?></div>
  <div class="row">
    <div class="col">
      <table class="table table-bordered table-striped">
        <thead>
          <tr>
          <th scope="col">
          <i class="fa-solid fa-trash-can"></i>
          </th>
            <th scope="col">#</th>
            <th scope="col">姓名</th>
            <th scope="col">email</th>
            <th scope="col">手機</th>
            <th scope="col">生日</th>
            <th scope="col">地址</th>
            <th scope="col">
            <i class="fa-solid fa-file-pen"></i>
            </th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($rows as $r) :  ?>
            <tr>
            <td><a href="javascript: deleteItem(<?= $r['sid'] ?>)">
            <i class="fa-solid fa-trash-can text-danger"></i>
            </a></td>
              <td><?= $r['sid'] ?></td>
              <td><?= $r['name'] ?></td>
              <td><?= $r['email'] ?></td>
              <td><?= $r['mobile'] ?></td>
              <td><?= $r['birthday'] ?></td>
              <td><?= htmlentities($r['address']) ?>
              <?= strip_tags($r['address']) ?></td>
              <td><a href="edit.php?sid=<?= $r['sid'] ?>">
              <i class="fa-solid fa-file-pen text-success"></i>
              </a></td>

            </tr>
          <?php endforeach  ?>
        </tbody>
      </table>
    </div>
  </div>
</div>




<?php include './parts/scripts.php' ?>
<script>
  function deleteItem(sid){
    if(confirm(`確定要刪除編號為 ${sid} 的資料嗎?`)){
      location.href = 'delete.php?sid=' + sid;
    }
  }
</script>

<?php include './parts/html_foot.php' ?>