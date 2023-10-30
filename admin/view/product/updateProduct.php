<?php
require_once $_SERVER["DOCUMENT_ROOT"] . '/project_mvc/admin/model/ModelCategory.php';
require_once $_SERVER["DOCUMENT_ROOT"] . '/project_mvc/admin/model/Model.php';

$product = ModelCategory::getAllCategory(Model::$pdo);

?>
<!-- <div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Sửa Sản Phẩm</h4>
                </div>
                <?php if (isset($_GET['IDproduct'])) {
                    $id = $_GET['IDproduct'];
                    $product = getbyIDProd("products", $id);
                    if (mysqli_num_rows($product) > 0) {
                        $data = mysqli_fetch_array($product);
                ?>
                <div class="card-body">
                    <form action="code.php" method="POST" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-md-6">
                                <label for="">Chọn Loại Sản Phẩm</label>
                                <select name="category_id" class="form-select">
                                    <?php
                                            $category = getAll("categoryproduct");
                                            if (mysqli_num_rows($category) > 0) {
                                                foreach ($category as $item) { ?>
                                    <option selected value="<?= $item['IDCategory'] ?>"><?= $item['NameCategory'] ?>
                                    </option>
                                    <?php
                                                }
                                            } else {
                                                echo ("Không có loại sản phẩm");
                                            }
                                            ?>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="">Tên Sản Phẩm</label>
                                <input required type="text" name="name_prod" class="form-control"
                                    placeholder="Enter Category Name" value="<?= $data['NameProd'] ?>">
                                <input type="hidden" name="product_id" value="<?= $data['IDproduct'] ?>">
                            </div>
                            <div class="col-md-6">
                                <label for="">Giá</label>
                                <input required type="text" name="price" class="form-control" placeholder="Nhập giá"
                                    value="<?= $data['Price'] ?>">
                            </div>
                            <div class="col-md-6">
                                <label for="">Giá Sale</label>
                                <input type="text" name="sale_price" class="form-control" placeholder="Nhập giá sale"
                                    value="<?= $data['SalePrice'] ?>">
                            </div>
                            <div class="col-md-12">
                                <label for="">Upload Image</label>
                                <input type="file" name="image" class="form-control">
                                <label for="">Ảnh cũ</label>
                                <input type="hidden" name="old_image" value="<?= $data['ImageProd'] ?>">
                                <img src="../uploads/<?= $data['ImageProd'] ?>" alt="<?= $data['NameProd'] ?>"
                                    style="width:50px; height:50px; overflow:hidden">
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="">Số Lượng</label>
                                    <input required type="number" name="quantity" class="form-control"
                                        placeholder="Số Lượng Sản Phẩm" min="0" value="<?= $data['QuantityProd'] ?>">
                                </div>
                                <div class="col-md-3">
                                    <label for="">Trạng Thái</label> <br />
                                    <input type="checkbox" name="status">
                                </div>
                                <div class=" col-md-3">
                                    <label for="">Phổ Biến</label> <br />
                                    <input type="checkbox" name="trending">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <label for="">Meta Title</label>
                                <input required name="meta_title" class="form-control" placeholder="Enter Meta Title"
                                    value="<?= $data['meta_title'] ?>">
                            </div>
                            <div class="col-md-12">
                                <label for="">Mô Tả Sản Phẩm</label>
                                <textarea required name="description" row="3" class="form-control"
                                    placeholder="Enter Meta Description"> <?php echo ($data['Description']) ?> </textarea>
                            </div>
                            <div class="col-md-12">
                                <label for="">Meta Description</label>
                                <textarea required name="meta_description" row="3" class="form-control"
                                    placeholder="Enter Meta Description"> <?= $data['meta_description'] ?> </textarea>
                            </div>
                            <div class="col-md-12">
                                <label for="">Meta Keywords</label>
                                <textarea required name="meta_keyword" row="3" class="form-control"
                                    placeholder="Enter Meta Keywords"> <?= $data['meta_keyword'] ?> </textarea>
                            </div>
                            <div class=" col-md-12" style="margin-top:10px;">
                                <button type="submit" class="btn btn-primary" name="update_product_btn">Sửa</button>
                            </div>
                        </div>
                    </form>
                </div>
                <?php
                    } else {
                        echo ("Không có sản phẩm");
                    }
                } else {
                    echo ("Sản Phẩm Không Tồn Tại");
                } ?>
            </div>
        </div>
    </div>
</div>
</div> -->
<?php
include('includes/footer.php');