<?php
require_once $_SERVER["DOCUMENT_ROOT"] . '/project_mvc/app/Redirect.php';
$header = $_SERVER["DOCUMENT_ROOT"] . '/project_mvc/admin/view/header.php';
$dashboard = $_SERVER["DOCUMENT_ROOT"] . '/project_mvc/admin/view/' . $_SESSION['page'] . '.php';


if ((!isset($_SESSION['username'])) && (empty($_SESSION['username']))) {
  $_SESSION['message'] = 'Bạn chưa đăng nhập';
  Redirect::to('localhost/project_mvc/admin/view/login/login.php');
} else {
  include($header);
?>

  <body>
    <div class="container-scroller">
      <!-- partial -->
      <?php include $dashboard ?>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
    </div>

  </body>

  </html>
<?php }
?>