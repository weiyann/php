<?php
require './parts/connect_db.php';
$title = '分類資料';

$sql = "SELECT * FROM categories";

$rows = $pdo->query($sql)->fetchAll();
# echo json_encode($rows, JSON_UNESCAPED_UNICODE);
?>
<?php include './parts/html_head.php' ?>
<?php include './parts/navbar.php' ?>


<div class="container">
  <div class="row">
    <div class="col-6">
      <div class="card">

        <div class="card-body">
          <h5 class="card-title">表單</h5>

          <form name="form1" onsubmit="return false">
            <div class="mb-3">
              <label for="name" class="form-label">主分類</label>
              <select class="form-select">
                <?php foreach ($rows as $r) :
                  if ($r['parent_sid'] == '0') : ?>
                    <option value="<?= $r['sid'] ?>"><?= $r['name'] ?></option>
                <?php
                  endif;
                endforeach ?>
              </select>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

<?php include './parts/scripts.php' ?>

<?php include './parts/html_foot.php' ?>