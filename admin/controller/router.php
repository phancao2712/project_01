<?php
require_once $_SERVER["DOCUMENT_ROOT"] . '/project_mvc/admin/model/Model.php';
require_once $_SERVER["DOCUMENT_ROOT"] . '/project_mvc/app/Redirect.php';
// require_once 'controllerLogin.php';
// require_once 'controllerCategory.php';
// require_once 'controllerBrand.php';
// require_once 'controllerProduct.php';
// require_once 'controllerOrder.php';
// require_once 'controllerHome.php';
session_start();

if (isset($_GET['page'])) {
    unset($_SESSION['page']);
    $_SESSION['page'] = $_GET['page'];
}
// checking the type of the request
if ((isset($_GET['type']) && (!empty($_GET['type'])))) {
    if ((isset($_GET['action']) && (!empty($_GET['action'])))) {

        $action = $_GET['action'];
        //LOGIN REquest
        // if ($_GET['type'] == 'login') {
        //     controllerLogin::$action($_POST['user_email'], $_POST['user_pass']);
        // }

        //LOGOUT request
        // if ($_GET['type'] == 'logout') {
        //     unset($_SESSION['username']);
        //     unset($_SESSION['type']);
        //     unset($_SESSION['page']);
        //     $_SESSION['message'] = 'Đăng xuất thành công';
        //     Redirect::to('localhost/project_mvc/admin/view/login/login.php');
        // }
        // //Catergory mangment
        // if ($_GET['type'] == 'category') {
        //     controllerCategory::$action();
        // }
        // //Brand managment
        // if ($_GET['type']=='brand'){
        //     controllerBrand::$action();
        // }
        //Product managment
        // if($_GET['type']=='product'){
        //     controllerProduct::$action();
        // }
        // //Order managment
        // if($_GET['type']=='order'){
        //     controllerOrder::$action();
        // }
        //Home managment
        // if ($_GET['type'] == 'home') {
        //     controllerHome::$action();
        // }
    }
// } else {
//     if (!isset($_SESSION['username']) && empty($_SESSION['username'])) {
//         $_SESSION['message'] = 'hãy đăng nhập  để tiếp tục';
//         Redirect::to('localhost/project_mvc/admin/view/login/login.php');
//     } else {
//         $path = $_SERVER["DOCUMENT_ROOT"] . '/project_mvc/admin/view/main/main.php';
//         require $path;
//     }
}

