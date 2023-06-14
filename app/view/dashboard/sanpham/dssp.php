
<div class="col">
    <div>
        <h5 class="font-14">Danh sách danh mục sản phẩm</h5>
        <p class="sub-header d-flex flex-row-reverse">
            <a class="m-2" href="<?php echo BASE_URL ?>sanpham/themsanpham">
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
                        <th>giá bán</th>
                        <th>Số lượng</th>
                        <th>chi tiết</th>
                        <th>hình ảnh</th>
                        <th>danh mục</th>
                        <th>Loại danh mục</th>
                        <th>Tình trạng</th>
                        <th>nổi bật</th>
                        <th>Chỉnh sửa</th>
                    </tr>
                </thead>
                <tbody>
                            <?php
                                foreach ($sanpham as $key => $value) {
                            ?>
                                <tr>
                                    <th scope="row"><?php echo $value['idsp'];?></th>
                                    <td><?php echo $value['tensp'];?></td>
                                    <td><?php echo number_format($value['giasp'])?></td>
                                    <td><?php echo $value['soluong'];?></td>
                                    <td><?php echo $value['chitiet'];?></td>
                                    <td>
                                        <img src="<?php echo BASE_URL ?>public/uploads/sanpham/<?php echo $value['hinhanh'];?>" alt="" height="100px">
                                    </td>
                                    <td><?php echo $value['tendm'];?></td>
                                    <td><?php echo $value['tenloaidm'];?></td>
                                    <td>
                                        <?php
                                            if ($value['tinhtrang']==1) {
                                                # code...
                                                echo '<span class="text-success"> Còn hàng</span>';
                                            }else{
                                                echo '<span class="text-danger"> Hết hàng</span>';
                                            }
                                        ?>      
                                    </td>
                                    <td class="text-lg-center">
                                        <?php
                                            if ($value['noibat']==1) {
                                                # code...
                                                echo '<i class="fa-solid fa-check"></i>';
                                            }
                                        ?>    
                                    </td>
                                    <td>
                                        <a href="<?php BASE_URL?>delete_sanpham/<?php echo $value['idsp'];?>" title="Delete">
                                            <i class="fa-solid fa-trash"></i>
                                        </a> |
                                        <a href="<?php BASE_URL?>edit_sanpham/<?php echo $value['idsp'];?>" title="Edit">
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
