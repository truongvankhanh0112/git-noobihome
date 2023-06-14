<div class="col">
<h4 class="header-title mb-3">Thêm sản phẩm mới</h4>
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
                foreach ($sanpham as $key => $sp) {
                    # code...
            ?>
    <div class="">
            <form class="form-horizontal" method="POST" action="<?php echo BASE_URL?>sanpham/update_sanpham/<?php echo $sp['idsp']?>" enctype="multipart/form-data" >
                <div class="form-group row">
                    <label class="col-md-2 col-form-label">Tên SP</label>
                    <div class="col-md-10">
                        <input name="tensp" type="text" class="form-control" value="<?php echo $sp['tensp']?>" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-2 col-form-label">Giá bán</label>
                    <div class="col-md-10">
                        <input name="giasp" type="number" id="example-email" name="example-email" class="form-control" value="<?php echo $sp['giasp']?>" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-2 col-form-label" for="example-textarea">Chi tiết sản phẩm</label>
                    <div class="col-md-10">
                        <textarea name="chitiet" class="form-control" rows="5" id="example-textarea"><?php echo $sp['chitiet']?></textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-2 col-form-label">Số lượng</label>
                    <div class="col-md-10">
                        <input name="soluong" type="number" value="<?php echo $sp['soluong']?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-2 col-form-label">Hình ảnh</label>
                    <div class="col-md-10">
                    <input name="hinhanh" value="<?php echo $sp['hinhanh']?>" type="file" class="filestyle" id="filestyle-0" tabindex="-1" style="display: none;">
                    <div class="bootstrap-filestyle input-group">
                        <div name="filedrag" style="position: absolute; width: 100%; height: 37.4px; z-index: -1;"></div>
                            <input type="text" class="form-control " value="<?php echo $sp['hinhanh']?>" placeholder="" disabled="" style="border-top-left-radius: 0.25rem; border-bottom-left-radius: 0.25rem;"> 
                            <span class="group-span-filestyle input-group-btn" tabindex="0">
                                <label for="filestyle-0" style="margin-bottom: 0;" class="btn btn-secondary ">
                                <span class="buttonText">Choose file</span>
                            </label>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-2 control-label">Danh mục</label>
                    <div class="col-md-10">
                        <select class="custom-select mt-3" name="iddm">
                            <option selected="">---Chọn---</option>
                                <?php
                                foreach ($danhmuc as $key => $dm) {
                                    # code...
                                
                                ?>
                                    <option <?php if($dm['iddm']==$sp['iddm']){ echo 'selected';}else{ echo '';} ?> value="<?php echo $dm['iddm'];?>"><?php echo $dm['tendm'];?></option>
                                <?php
                                }
                                ?>
                        </select>
                    </div>
                </div>  
                <div class="form-group row">
                    <label class="col-md-2 control-label">Loại Danh mục</label>
                    <div class="col-md-10">
                        <select class="custom-select mt-3" name="idloaidm">
                            <option selected="">---Chọn---</option>
                                <?php
                                    foreach ($loaidm as $key => $loaidm) {
                                        # code...
                                ?>
                                    <option <?php if($loaidm['idloaidm']==$sp['idloaidm']){ echo 'selected';}else{ echo '';} ?>  value="<?php echo $loaidm['idloaidm'];?>"><?php echo $loaidm['tenloaidm'];?></option>
                                <?php
                                    }
                                ?>
                        </select>
                    </div>
                </div>  
                <div class="form-group row">
                <label class="col-md-2 control-label">nổi bật ?</label>
                <div class="col-md-10">
                    <div class="col-md-10">
                        <div class="">
                            <input name="noibat" type="radio" value="0" checked>
                            <label>
                                Không
                            </label>
                        </div>
                        <div class="">
                            <input name="noibat" type="radio" value="1">
                            <label>
                                Có
                            </label>
                        </div>
                    </div>
                </div>
            </div>
                <div class="form-group row justify-content-end mb-0">
                    <div class="col-md-10">
                        <button type="submit" class="btn btn-info">Submit</button>
                    </div>
                </div>
            </form>
    </div>
    <?php
        }
    ?>
</div>