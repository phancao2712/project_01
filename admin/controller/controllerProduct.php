<?php
require_once $_SERVER["DOCUMENT_ROOT"] . '/project_mvc/admin/model/ModelProduct.php';
require_once $_SERVER["DOCUMENT_ROOT"] . '/project_mvc/admin/model/ModelCategory.php';
require_once $_SERVER["DOCUMENT_ROOT"] . '/project_mvc/admin/model/Model.php';

if (isset($_POST["delete_product_btn"]) && !empty($_POST["delete_product_btn"])) {
    $prod_id = $_POST['IDProduct'];
    $_SESSION['message'] = "Xóa thành công";
    ModelProduct::deleteProduct(Model::$pdo, $prod_id);

    if (ModelProduct::deleteProduct(Model::$pdo, $prod_id)) {
        echo 27;
    } else {
        echo 12;
    }
}

class controllerProduct
{

    public static function getall()
    {
        $res = ModelProduct::getall(Model::$pdo);
        require('../view/main/main.php');
    }

    public static function add()
    {
        $IDCate = $_POST['category_id'];
        $name = $_POST['name_prod'];
        $price = $_POST['price'];
        $price_sale = $_POST['price_sale'];
        $image = $_FILES['image']['name'];
        $qty = $_POST['quantity'];
        $status = isset($_POST['status']) ? '1' : '0';
        $trend = isset($_POST['trend']) ? '1' : '0';

        $image_ext = pathinfo($image, PATHINFO_EXTENSION);
        $file_name = time() . '.' . $image_ext;
        $path = '../../uploads';

        $add = new ModelProduct(
            $IDCate,
            $name,
            $price,
            $price_sale,
            $file_name,
            $qty,
            $status,
            $trend
        );

        $add->addProduct(Model::$pdo);
        move_uploaded_file($_FILES['image']['tmp_name'], $path . '/' . $file_name);
        $_SESSION['message'] = 'Thêm thành công';
        $_SESSION['page'] = 'dashboard';
        header('Location: ../../admin/controller/router.php?page=product&type=home&action=getall');
    }



    public static function updateProduct(){
        $prod_id=$_GET['product_id'];
        ModelProduct::updateProduct(Model::$pdo,$prod_id);
        $_SESSION['page']="dashboard";
        header ('Location: ../../admin/controller/router.php?page=dashboard&type=home&action=getall');
    }  
}
