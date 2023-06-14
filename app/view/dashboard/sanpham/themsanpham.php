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
            ?>
    <div class="">
            <form class="form-horizontal" method="POST" action="<?php echo BASE_URL?>sanpham/insert_sanpham" enctype="multipart/form-data" >
                <div class="form-group row">
                    <label class="col-md-2 col-form-label">Tên SP</label>
                    <div class="col-md-10">
                        <input name="tensp" type="text" class="form-control" placeholder="Nhập tên sản phẩm" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-2 col-form-label">Giá bán</label>
                    <div class="col-md-10">
                        <input name="giasp" type="number" id="example-email" name="example-email" class="form-control" placeholder="Giá bán của sản phẩm" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-2 col-form-label" for="example-textarea">Chi tiết sản phẩm</label>
                    <div class="col-md-10">
                        <textarea name="chitiet" class="form-control" rows="5" id="example-textarea" placeholder="Nhập mô tả chi tiết về sản phẩm"></textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-2 col-form-label">Số lượng</label>
                    <div class="col-md-10">
                        <input name="soluong" type="number" value="1">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-2 col-form-label">Hình ảnh</label>
                    <div class="col-md-10">
                    <input name="hinhanh" required type="file" class="filestyle" id="filestyle-0" tabindex="-1" style="display: none;"><div class="bootstrap-filestyle input-group"><div name="filedrag" style="position: absolute; width: 100%; height: 37.4px; z-index: -1;"></div><input type="text" class="form-control " placeholder="" disabled="" style="border-top-left-radius: 0.25rem; border-bottom-left-radius: 0.25rem;"> <span class="group-span-filestyle input-group-btn" tabindex="0"><label for="filestyle-0" style="margin-bottom: 0;" class="btn btn-secondary "><span class="buttonText">Choose file</span></label></span></div>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-2 control-label">Danh mục</label>
                    <div class="col-md-10">
                        <select class="custom-select mt-3" name="iddm">
                            <option selected="">---Chọn---</option>
                                <?php
                                foreach ($danhmuc as $key => $value) {
                                    # code...
                                
                                ?>
                                    <option  value="<?php echo $value['iddm'];?>"><?php echo $value['tendm'];?></option>
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
                                foreach ($loaidm as $key => $value) {
                                    # code...
                                
                                ?>
                                    <option  value="<?php echo $value['idloaidm'];?>"><?php echo $value['tenloaidm'];?></option>
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
</div>