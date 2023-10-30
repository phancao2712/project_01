<?php
require_once $_SERVER["DOCUMENT_ROOT"] . '/project_mvc/admin/model/ModelCategory.php';
require_once $_SERVER["DOCUMENT_ROOT"] . '/project_mvc/admin/model/Model.php';

$cate = ModelCategory::getAllCategory(Model::$pdo);

?>
<!-- <div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Thêm Sản Phẩm</h4>
                </div>
                <div class="card-body">
                    <form action="../../admin/controller/router.php?type=product&action=add" method="POST" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-md-6">
                                <label for="">Chọn Loại Sản Phẩm</label>
                                <select name="category_id" class="form-select">
                                    <option selected>Chọn Loại Sản Phẩm</option>
                                    <?php
                                    foreach ($cate as $item) { ?>
                                        <option value="<?= $item['IDCategory'] ?>"><?= $item['NameCategory'] ?></option>
                                    <?php };
                                    ?>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="">Tên Sản Phẩm</label>
                                <input required type="text" name="name_prod" class="form-control" placeholder="Enter Category Name">
                            </div>
                            <div class="col-md-6">
                                <label for="">Giá Sale</label>
                                <input required type="text" name="price" class="form-control" placeholder="Nhập giá">
                            </div>
                            <div class="col-md-6">
                                <label for="">Giá</label>
                                <input type="text" name="price_sale" class="form-control" placeholder="Nhập giá sale">
                            </div>
                            <div class="col-md-12">
                                <label for="">Upload Image</label>
                                <input required type="file" name="image" class="form-control">
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="">Số Lượng</label>
                                    <input required type="number" name="quantity" class="form-control" placehoder="Số Lượng Sản Phẩm" min="0">
                                </div>
                                <div class="col-md-3">
                                    <label for="">Trạng Thái</label> <br />
                                    <input type="checkbox" name="status">
                                </div>
                                <div class="col-md-3">
                                    <label for="">Phổ Biến</label><br />
                                    <input type="checkbox" name="trend">
                                </div>
                            </div>
                            <div class=" col-md-12" style="margin-top:10px;">
                                <button type="submit" class="btn btn-primary" name="add_product_btn">Lưu</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div> -->
<?php
include('../view/footer.php');
?>