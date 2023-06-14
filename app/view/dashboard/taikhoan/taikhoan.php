
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
                        <th>Email</th>
                        <!-- <th>pass</th> -->
                        <th>Họ tên</th>
                        <th>SDT</th>
                        <th>Giới tính</th>
                        <th>Địa chỉ</th>
                        <th>Chỉnh sửa</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    foreach ($taikhoan as $key => $value) {
                ?>
                    <tr>
                        <th scope="row"><?php echo $value['idtk'];?></th>
                        <td class="text-lowercase"><?php echo $value['email'];?></td>
                        <!-- <td>
                            <?php //echo $value['pass'] ?>
                        </td> -->
                        <td><?php echo $value['hoten']?></td>
                        <td><?php echo $value['sdt']?></td>
                        <td>
                            <?php 
                                if($value['gioitinh']==1){
                                    echo ' NAM';
                                }else{
                                    echo 'Nữ';
                                }
                        
                            ?>
                        </td>
                        <td><?php echo $value['diachi']?></td>
                        <td>
                            <a href="<?php BASE_URL?>delete_taikhoan/<?php echo $value['idtk'];?>" title="Delete">
                                <i class="fa-solid fa-trash"></i>
                            </a> |
                            <a href="<?php BASE_URL?>edit_tk/<?php echo $value['idtk'];?>" title="Edit">
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
