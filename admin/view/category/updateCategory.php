<?php
include('../view/header.php');
?>

<!-- <div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Sửa danh mục sản phẩm</h4>
                </div>
                <div class="card-body">
                    <form action="../../admin/controller/router.php?type=category&action=updateCategory&cat_id=<?= $_GET['cat_id'] ?>" method="POST" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-md-12"></div>
                            <label for="">Tên danh mục</label>
                            <input type="hidden" name="cat_id" value="<?= $_GET['cat_id'] ?>">
                            <input type="text" name="cat_title" class="form-control" placeholder="Enter Category Name" value="<?= $_GET['cat_title'] ?>">
                            <div class="col-md-12"></div>
                            <label for="">Upload Image</label>
                            <input type="file" name="new_image" class="form-control">
                            <b style="margin-top: 10px;">Ảnh cũ</b> <br>
                            <input type="hidden" name="old_image" value="<?= $_GET['cat_img'] ?>">
                            <img src="../../uploads/<?= $_GET['cat_img'] ?>" alt="<?= $_GET['cat_title'] ?>" style="width:100px; height:100px; overflow:hidden">
                            <div class=" col-md-12">
                                <button type="submit" class="btn btn-primary" name="update_category_btn" style="margin-top: 20px;">Sửa</button>
                            </div>
                        </div>
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