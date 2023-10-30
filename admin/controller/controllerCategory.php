<?php
// require_once $_SERVER["DOCUMENT_ROOT"] . '/project_mvc/admin/model/ModelCategory.php';
// require_once $_SERVER["DOCUMENT_ROOT"] . '/project_mvc/admin/model/Model.php';

// if (isset($_POST["delete_category_btn"]) && !empty($_POST["delete_category_btn"])) {
//     $cat_id = $_POST['IDCategory'];
//     $_SESSION['message'] = "Xóa thành công";
//     ModelCategory::deleteCategory(Model::$pdo, $cat_id);

//     if (ModelCategory::deleteCategory(Model::$pdo, $cat_id)) {
//         echo 27;
//     } else {
//         echo 12;
//     }
// }

// class controllerCategory
// {
//     public static function getall()
//     {
//         $res = ModelCategory::getAllCategory(Model::$pdo);
//         require('../view/main/main.php');
//     }
//     public static function add()
//     {
//         $cat_title = $_POST['name_cate'];
//         $cat_image = $_FILES['image']['name'];

//         $image_ext = pathinfo($cat_image, PATHINFO_EXTENSION);
//         $file_name = time() . '.' . $image_ext;
//         $path = '../../uploads';

//         $add = new ModelCategory($cat_title, $file_name);
//         $add->addCategorie(Model::$pdo);
//         move_uploaded_file($_FILES['image']['tmp_name'], $path . '/' . $file_name);

//         $_SESSION['message'] = 'Thêm thành công';
//         $_SESSION['page'] = 'dashboard';
//         header('Location: ../../admin/controller/router.php?page=category&type=home&action=getall');
//     }

//     public static function updateCategory()
//     {
//         $cat_id = $_GET['cat_id'];
//         $cat_title = $_POST['cat_title'];

//         $new_image = $_FILES['new_image']['name'];
//         $old_image = $_POST['old_image'];

//         if ($new_image != '') {
//             $image_ext = pathinfo($new_image, PATHINFO_EXTENSION);
//             $file_name = time() . '.' . $image_ext;
//             $path = '../../uploads';
//         } else {
//             $file_name = $old_image;
//         }

//         move_uploaded_file($_FILES['new_image']['tmp_name'], $path . '/' . $file_name);
//         ModelCategory::updateCategory(Model::$pdo, $cat_id, $cat_title, $file_name);

//         $_SESSION['page'] = "dashboard";
//         $_SESSION['message'] = "Sửa thành công";

//         header('Location: ../../admin/controller/router.php?page=category&type=home&action=getall');
//     }
// }
