<?
if(!isset($pageName)){
  $pageName = '';
}
?>

<style>
  nav.navbar ul.navbar-nav .nav-link.active{
    background-color: blue;
    color: white;
    border-radius: 6px;
    font-weight: 600;
  }
</style>
<div class="container">
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
      <div class="container-fluid">
        <a class="navbar-brand" href="./">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link <?= $pageName=='list' ? 'active':'' ?>"  href="list.php">列表</a>
            </li>
            <li class="nav-item">
              <a class="nav-link <?= $pageName=='add' ? 'active':'' ?>" href="add.php">新增</a>
            </li>
            <li class="nav-item">
              <a class="nav-link <?= $pageName=='cate2' ? 'active':'' ?>" href="cate2.php">二層選單</a>
            </li>            
          </ul>
          <ul class="navbar-nav mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link <?= $pageName=='list' ? 'active':'' ?>"  href="login.php">登入</a>
            </li>
            
          </ul>
          
        </div>
      </div>
    </nav>
  </div>