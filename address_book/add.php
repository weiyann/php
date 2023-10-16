<?php
require './parts/connect_db.php';

$pageName = 'add';
$title = '新增'
?>

<?php include './parts/html_head.php' ?>
<?php include './parts/navbar.php' ?>

<style>
  form .form-text {
    color: red;
  }
</style>

<div class="container">
  <div class="row">
    <div class="col6">
      <div class="card" style="width: 18rem;">

        <div class="card-body">
          <h5 class="card-title">新增資料</h5>

          <form name="form1" onsubmit="sendData(event)">
            <div class="mb-3">
              <label for="name" class="form-label">name</label>
              <input type="text" class="form-control" id="name" name="name">
              <div class="form-text"></div>
            </div>
            <div class="mb-3">
              <label for="email" class="form-label">email</label>
              <input type="text" class="form-control" id="email" name="email">
              <div class="form-text"></div>
            </div>
            <div class="mb-3">
              <label for="mobile" class="form-label">mobile</label>
              <input type="text" class="form-control" id="mobile" name="mobile">
              <div class="form-text"></div>
            </div>
            <div class="mb-3">
              <label for="birthday" class="form-label">birthday</label>
              <input type="date" class="form-control" id="birthday" name="birthday">
              <div class="form-text"></div>
            </div>
            <div class="mb-3">
              <label for="address" class="form-label">address</label>
              <textarea class="form-control" name="address" id="address" cols="30" rows="3"></textarea>
              <div class="form-text"></div>
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
  const name_in = document.form1.name; //不能先抓值，會抓到空字串
  const email_in = document.form1.email;
  const mobile_in = document.form1.mobile;
  const fields = [name_in, email_in, mobile_in];

  function validateEmail(email) {
    const re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(email);
  }

  function validateMobile(mobile) {
    const re = /^09\d{2}-?\d{3}-?\d{3}$/;
    return re.test(mobile);
  }



  function sendData(e) {
    e.preventDefault(); // 不要讓表單以傳統的方式送出

    // 外觀要回復原來的狀態
    name_in.style.border = '1px solid #ccc';
    name_in.nextElementSibling.innerHTML = '';
    fields.forEach(field => {
      field.style.border = '1px solid #ccc';
      field.nextElementSibling.innerHTML = '';
    })


    // TODO: 資料在送出之前, 要檢查格式
    let isPass = true; // 有沒有通過檢查
/*
    if (name_in.value.length < 2) {
      isPass = false;
      name_in.style.border = '2px solid red';
      name_in.nextElementSibling.innerHTML = '請填寫正確的姓名';
    }

    if (!validateEmail(email_in.value)) {
      isPass = false;
      email.style.border = '2px solid red';
      email.nextElementSibling.innerHTML = '請填寫正確的 Email';
    }
*/
    // 非必填
    if (mobile_in.value && !validateMobile(mobile_in.value)) { //如果有值但不符合格式就錯誤，沒有值就不執行這個if
      isPass = false;
      mobile.style.border = '2px solid red';
      mobile.nextElementSibling.innerHTML = '請填寫正確的手機號碼';
    }

    if (!isPass) {
      return; // 沒有通過就不要發送資料
    }

    // 建立只有資料的表單，FormData()類型，設定document.form1的參照
    const fd = new FormData(document.form1);

    fetch('add-api.php', {
        method: 'POST',
        body: fd, // 送出的格式會自動是 multipart/form-data #body：請求的主體數據，可以是 FormData 對象、Blob 對象、JSON 字符串等。
      }).then(r => r.json())
      .then(data => {
        console.log({
          data
        });
        if(data.success){
          alert('資料新增成功');
          location.href="./list.php"
        }else{
          alert('發生問題')
        }
      })
      .catch(ex => console.log(ex))

  }
</script>
<?php include './parts/html_foot.php' ?>