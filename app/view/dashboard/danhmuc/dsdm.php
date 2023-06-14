
<div class="col">
    <div>
        <h5 class="font-14">Danh sách danh mục sản phẩm</h5>
        <p class="sub-header d-flex flex-row-reverse">
            <a class="m-2" href="<?php echo BASE_URL ?>danhmuc/themdanhmuc">
                <button type="button" class="btn btn-success ">
                    Thêm mới 
                    <i class="fa-solid fa-plus"></i>
                </button>
            </a>
            <a class="m-2" href="#">
                <button type="button" class="btn btn-info">
                    Xem danh sách
                </button>
            </a>
        </p>
            <?php
                if (!empty($_GET['msg'])) {
                    $msg = unserialize(urldecode($_GET['msg']));
                    foreach ($msg as $key => $value) {
            ?>
            <div class="alert alert-success text-success alert-dismissible fade show" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
                <strong><?php echo "$value";?>!</strong>
            </div>
            <?php 
                    }
                }
            ?>
        <div class="table-responsive">
            <table class="table m-0 text-capitalize">
            <style>
                .icon-edit {
                    font-size: 20px;
                }
            </style>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Tên danh mục</th>
                        <th>nổi bật</th>
                        <th>Chỉnh sửa</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    foreach ($danhmuc as $key => $value) {
                ?>
                    <tr>
                        <th scope="row"><?php echo $value['iddm'];?></th>
                        <td><?php echo $value['tendm'];?></td>
                        <td>
                            <?php
                                if ($value['noibat']==1) {
                                    # code...
                                    echo '<i class="fa-solid fa-check"></i>';
                                }
                            ?>
                        </td>
                        <td>
                            <a href="<?php BASE_URL?>delete_danhmuc/<?php echo $value['iddm'];?>" title="Delete">
                                <i class="fa-solid fa-trash"></i>
                            </a> |
                            <a href="<?php BASE_URL?>edit_danhmuc/<?php echo $value['iddm'];?>" title="Edit">
                                <i class="fa-solid fa-pen"></i>
                            </a>
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
