<!-- <?php
$page = $_SESSION['page'];
?>
<aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark" id="sidenav-main">
  <div class="sidenav-header">
    <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
    <a class="navbar-brand m-0" href="https://demos.creative-tim.com/material-dashboard/pages/dashboard " target="_blank">
      <span class="ms-1 font-weight-bold text-white">GreenCart</span>
    </a>
  </div>
  <hr class="horizontal light mt-0 mb-2">
  <div class="collapse navbar-collapse  w-auto  max-height-vh-100" id="sidenav-collapse-main">
    <ul class="navbar-nav">
      <li class="nav-item ">
        <a class="nav-link text-white <?= $page == 'dashboard' ? 'active bg-gradient-primary' : '' ?>" href="../controller/router.php?page=dashboard&type=home&action=getall">
          <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
            <i class="material-icons opacity-10">dashboard</i>
          </div>
          <span class="nav-link-text ms-1 ">Thống kê</span>
        </a>
      </li>
      <li class="nav-item ">
        <a class="nav-link text-white <?= $page == 'category/addCategory' ? 'active bg-gradient-primary' : '' ?>" href="../controller/router.php?page=category/addCategory">
          <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
            <i class="fa-solid fa-plus" style="color: #ffffff;"></i>
          </div>
          <span class="nav-link-text ms-1 ">Thêm danh mục sản phẩm</span>
        </a>
      </li>
      <li class="nav-item ">
        <a class="nav-link text-white <?= $page == 'category/category' ? 'active bg-gradient-primary' : '' ?>" href="../../admin/controller/router.php?page=category/category&type=category&action=getall">
          <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
            <i class="fa-solid fa-list" style="color: #ffffff;"></i>
          </div>
          <span class="nav-link-text ms-1 ">Danh sách danh mục</span>
        </a>
      </li>
      <li class="nav-item ">
        <a class="nav-link text-white <?= $page == 'product/addProduct' ? 'active bg-gradient-primary' : '' ?>" href="../../admin/controller/router.php?page=product/addProduct">
          <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
            <i class="fa-solid fa-list" style="color: #ffffff;"></i>
          </div>
          <span class="nav-link-text ms-1 ">Thêm sản phẩm</span>
        </a>
      </li>
      <li class="nav-item ">
        <a class="nav-link text-white <?= $page == 'product/product' ? 'active bg-gradient-primary' : '' ?>" href="../../admin/controller/router.php?page=product/product&type=product&action=getall">
          <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
            <i class="fa-solid fa-list" style="color: #ffffff;"></i>
          </div>
          <span class="nav-link-text ms-1 ">Danh sách sản phẩm</span>
        </a>
      </li>
    </ul>
  </div>
  <div class="sidenav-footer position-absolute w-100 bottom-0 ">
    <div class="mx-3">
      <a class="btn bg-gradient-primary mt-4 w-100" href="../controller/router.php?type=logout&action=logout" type="button">Đăng
        Xuất</a>
    </div>
  </div>
</aside> -->