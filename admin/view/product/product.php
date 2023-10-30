<!-- <div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Sản Phẩm</h4>
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-stripe" id="product_table">
                        <thead>
                            <tr>
                                <th>Tên</th>
                                <th>Giá</th>
                                <th>Giá sale</th>
                                <th>Sale</th>
                                <th>Trending</th>
                                <th>Ảnh</th>
                                <th>Thao tác</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($res as $item) {
                            ?>
                                <tr>
                                    <td><?= $item['NameProd']; ?></td>
                                    <td><?= $item['Price']; ?></td>
                                    <td><?= $item['SalePrice']; ?></td>
                                    <td><?= $item['status'] == '1' ? '<i class="fa-solid fa-check"></i>' : '' ?></td>
                                    <td><?= $item['trending'] == '1' ? '<i class="fa-solid fa-check"></i>' : '' ?></td>
                                    <td><img src="../../uploads/<?= $item['ImageProd'] ?>" alt="<?= $item['NameProd']; ?>" style="width:50px; height:50px; overflow:hidden">
                                    </td>
                                    <td>
                                        <button type="button" class="btn btn-danger btn-icon-text delete_product_btn" value="<?= $item['IDproduct'] ?>">
                                            <i class="ti-trash btn-con-prepend"><a href="../../admin/controller/router.php?type=product&action=deleteProduct&product_id=<?= $item['IDproduct'] ?>" style="color: white;">Xóa</a> </i>
                                        </button>
                                        <button type="button" class="btn btn-primary btn-icon-text">
                                            <i class="ti-reload btn-con-prepend"><a href="../../admin/controller/router.php?page=product/updateProduct&product_id=<?= $item['IDproduct'] ?>" style="color: white;">Sửa</a></i>
                                        </button>
                                    </td>
                                </tr>
                            <?php
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
</div> -->
<?php
include('../view/footer.php');
?>