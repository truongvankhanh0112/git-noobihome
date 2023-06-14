<?php
    foreach ($taikhoan as $key => $value) {
       
?>
<div class="col">
    <div class="mt-5">
        <h4 class="header-title mb-3">Đăng nhập tài khoản</h4>
        <form action="<?php echo BASE_URL ?>login/update_tk" method="post">
            <div class="form-group">
                <label for="exampleInputEmail1">Email</label>
                <input name="email" type="email" class="form-control" id="exampleInputEmail1" value="<?php echo $value['email']?>">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input name="pass" type="password" class="form-control" id="exampleInputPassword1" value="<?php echo $value['pass']?>">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Họ tên</label>
                <input name="pass" type="text" class="form-control"value="<?php echo $value['hoten']?>">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Số điện thoại</label>
                <input name="pass" type="text" class="form-control" value="<?php echo $value['sdt']?>">
            </div>
            <div class="form-group">
                Giới tính
                <input type="radio" name="gioitinh" value="1"> : Nam
                <input type="radio" name="gioitinh" id="" value="1"> : Nữ
            </div>
            <div class="form-group row">
                    <label class="col-md-2 col-form-label" for="example-textarea">Địa chỉ</label>
                    <div class="col-md-10">
                        <textarea name="chitiet" class="form-control" rows="5" id="example-textarea">
                        <?php echo $value['diachi']?>
                        </textarea>
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
<?php
    }
?>
