<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<div class="col">
    <div>
        <h5 class="font-14">Danh sách đơn hàng</h5>
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
                        <th>MÃ DH</th>
                        <th>Người Đặt</th>
                        <th>Tổng đơn hàng</th>
                        <th>Ngày đặt</th>
                        <th>Trạng thái</th>
                        <th>Chỉnh sửa</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    foreach ($donhang as $key => $value) {
                ?>
                    <tr>
                        <td scope="row">
                            <a href="<?php echo BASE_URL?>giohang/xemctdh/<?=$value['iddonhang']?>"><strong>#<?php echo $value['iddonhang'];?></strong></a>
                        </td>
                        <td><?php echo $value['hoten'];?></td>
                        <td class="text-danger">
                            <?php
                                echo number_format($value['giatridh']).'đ';
                            ?>
                        </td>
                        <td><?=$value['ngayxuathd']?></td>
                        <td>
                            <?php 
                            $ttdh = $value['trangthaidonhang'];
                            switch ($ttdh) {
                                case '1':
                                    echo 'Đang xử lý';
                                    break;
                                case '2':
                                    echo 'Đang giao hàng';
                                    break;
                                case '3':
                                    echo 'Hoàn thành';
                                    break;
                                default:
                                    # code...
                                    break;
                            }
                            ?>
                        </td>
                        <td class="text-center" style="width: 100px;">
                            <a href="<?php BASE_URL?>deleteDH/<?php echo $value['iddonhang'];?>" title="Delete">
                                <i class="fa-solid fa-trash" style="color: black;"></i>
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