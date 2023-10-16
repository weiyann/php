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
            <div class="input-group mb-3">
            <span class="input-group-text">主分類</span>
              <select class="form-select" name="cate1" id="cate1" onchange="generateCate2List()">
                <?php foreach ($rows as $r) :
                  if ($r['parent_sid'] == '0') : ?>
                    <option value="<?= $r['sid'] ?>"><?= $r['name'] ?></option>
                <?php
                  endif;
                endforeach ?>
              </select>
            </div>
            <div class="input-group mb-3">
              <span class="input-group-text">次分類</span>
              <select class="form-select" name="cate2" id="cate2"></select>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

<?php include './parts/scripts.php' ?>
<script>
  const initVals = {cate1:2, cate2:16};
  const cates = <?= json_encode($rows, JSON_UNESCAPED_UNICODE) ?>;

  const cate1 = document.querySelector('#cate1');
  const cate2 = document.querySelector('#cate2');

  function generateCate2List() {
    const cate1Val = cate1.value; // 主分類的值

    let str = "";
    for (let item of cates) {
      if (+item.parent_sid === +cate1Val) { // 如果item的parent_sid = 主分類的值
        str += `<option value="${item.sid}">${item.name}</option>`;
      }
    }

    cate2.innerHTML = str; // 寫進次分類
  }
  cate1.value=initVals.cate1; //設定第一層初始值
  generateCate2List(); //一進來就呼叫
  cate2.value=initVals.cate2; //設定第二層初始值
</script>
<?php include './parts/html_foot.php' ?>