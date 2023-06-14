
<div class="col">
    <div>
        <h5 class="font-14">Danh sách danh mục sản phẩm</h5>
        <p class="sub-header d-flex flex-row-reverse">
            <a class="m-2" href="<?php echo BASE_URL ?>khuyenmai/addKM">
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
                        <th>MÃ</th>
                        <th>Số lượng</th>
                        <th>Giá Tiền</th>
                        <th>Phần trăm</th>
                        <th>Chi tiết KM</th>
                        <th>Chỉnh sửa</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    foreach ($khuyenmai as $key => $value) {
                ?>
                    <tr>
                        <th scope="row"><?php echo $value['id_km'];?></th>
                        <td><?php echo $value['maKhuyenMai'];?></td>
                        <td><?php echo $value['soluongma'];?></td>
                        <td><?php echo number_format($value['giatien'])?></td>
                        <td><?php echo $value['phantram'];?>%</td>
                        <td><?php echo $value['chitiet'];?></td>
                        <td>
                            <a href="<?php BASE_URL?>delete/<?php echo $value['id_km'];?>" title="Delete">
                                <i class="fa-solid fa-trash"></i>
                            </a> |
                            <a href="<?php BASE_URL?>edit/<?php echo $value['id_km'];?>" title="Edit">
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
