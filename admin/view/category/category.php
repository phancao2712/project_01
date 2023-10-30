<?php
include('../view/header.php');

?>
<!-- <div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Loại Sản Phẩm</h4>
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-stripe" id="category_table">
                        <thead>
                            <tr>
                                <th>Tên</th>
                                <th>Ảnh</th>
                                <th>Số sản phẩm</th>
                                <th>Thao tác</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($res as $r) { ?>
                                <tr>
                                    <td class="py-1 ">
                                        <?= $r['NameCategory'] ?>
                                    </td>
                                    <td><img src="../../uploads/<?= $r['ImageCategory'] ?>" alt="<?= $r['NameCategory']; ?>" style="width:50px; height:50px; overflow:hidden">
                                    </td>
                                    <td></td>
                                    <td>
                                        <button type="button" class="btn sm-btn btn-danger delete_category_btn" value="<?= $r['IDCategory'] ?>">
                                            <i class="ti-trash btn-con-prepend"><a href="../../admin/controller/router.php?type=category&action=deleteCategory&cat_id=<?= $r['IDCategory'] ?>" style="color: white;">Delete</a> </i>
                                        </button>
                                        <button type="button" class="btn btn-primary">
                                            <i class="ti-reload btn-con-prepend"><a href="../../admin/controller/router.php?page=category/updateCategory&cat_title=<?=$r['NameCategory']?>&cat_id=<?=$r['IDCategory']?>&cat_img=<?=$r['ImageCategory']?>" style="color: white;"> Update</a></i>
                                        </button>
                                    </td>
                                </tr>
                            <?php } ?>
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