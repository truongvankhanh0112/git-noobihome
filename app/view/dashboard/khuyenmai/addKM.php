<div class="col">
    <h4 class="header-title mb-3">Thêm danh mục sản phẩm mới</h4>

    <?php
        if (!empty($_GET['msg'])) {
            $msg = unserialize(urldecode($_GET['msg']));
            foreach ($msg as $key => $value) {
                echo "<span style='color: blue;'><h4 class='text-danger'>".$value."</h4></span>";
            }
        }
    ?>
    <form class="form-horizontal mt-3" action="<?php echo BASE_URL?>khuyenmai/insert_km" method="post">
        <div class="form-group row">
            <label for="text" class="col-md-3 control-label">Mã Khuyến Mãi</label>
            <div class="col-md-9">
                <input name="makm" type="text" class="form-control" id="inputEmail3" placeholder="Nhập mã" required>
            </div>
        </div>
        <div class="form-group row">
            <label for="text" class="col-md-3 control-label">Số lượng Mã Khuyến Mãi</label>
            <div class="col-md-9">
                <input name="soluongma" type="text" class="form-control"  placeholder="Nhập số lượng" required>
            </div>
        </div>
        <div class="form-group row">
            <label for="text" class="col-md-3 control-label">Chọn loại giảm giá</label>
            <div class="col-md-9">
                <input type="radio" name="loaikm" id="" value="giatien"> Giá Tiền <br>
                <input type="radio" name="loaikm" id="" value="phantram"> Phần Trăm
            </div>
        </div>
        <div class="form-group row">
            <label for="text" class="col-md-3 control-label"></label>
            <div class="col-md-9">
                <input name="giatri" type="number" class="form-control" id="inputEmail3" placeholder="Nhập số tiền hoặc số phần trăm cần giảm" required>
            </div>
        </div>
        <div class="form-group row">
            <label for="text" class="col-md-3 control-label">Mô tả</label>
            <div class="col-md-9">
                <textarea name="chitiet" id="" cols="100" rows="10"></textarea>
            </div>
        </div>
        <div class="form-group row justify-content-end">

        </div>
        <div class="form-group row justify-content-end mb-0">
            <div class="col-md-9">
                <button type="submit" class="btn btn-info">Submit</button>
            </div>
        </div>
    </form>

</div>
