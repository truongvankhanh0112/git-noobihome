<div class="container"><br><br>
    <form action="<?php echo BASE_URL?>login/update_taikhoan/<?=$_SESSION['account'][0]['idtk']?>" method="post" style="width: 50%; margin: auto;" class="mx-auto">
        <div class="row mb-3">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Email:</label>
            <div class="col-sm-10">
                <input type="hidden"name="idtk" value="<?=$_SESSION['account'][0]['idtk']?>">
                <input type="text" class="form-control" name="email" value="<?=$_SESSION['account'][0]['email']?>">
            </div>
        </div><br>
        <div class="row mb-3 mt-1">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Họ tên:</label>
            <div class="col-sm-10">
            <input type="text" class="form-control" name="hoten" value="<?=$_SESSION['account'][0]['hoten']?>">
            </div>
        </div><br>
        <div class="row mb-3">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Số điện thoại</label>
            <div class="col-sm-10">
            <input type="text" class="form-control" name="sdt" value="<?=$_SESSION['account'][0]['sdt']?>">
            </div>
        </div><br>
        <fieldset class="row mb-3">
        <label for="gender" class="col-sm-2 col-form-label">Giới tính</label>
            <div class="col-sm-10">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gioitinh" id="" value="1" checked>
                    <label class="form-check-label" for="gridRadios1">
                        Nam
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gioitinh" id="" value="0">
                    <label class="form-check-label" for="gridRadios2">
                        Nữ
                    </label>
                </div>
            </div>
        </fieldset><br>
        <?php
                        if (!empty($_GET['msg'])) {
                            $msg = unserialize(urldecode($_GET['msg']));
                            foreach ($msg as $key => $value) {
                    ?>
                    <div class="alert text-danger alert-dismissible show" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                        <strong><?php echo "$value";?>!</strong>
                    </div>
                    <?php 
                            }
                        }
                    ?>
        <div class="row mb-3">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Địa chỉ:</label>
            <div class="col-sm-10">
                <textarea name="diachi" class="form-control" cols="30" rows="10" required></textarea>
            </div>
        </div>
        <!-- <div class="row mb-3">
            <div class="col-sm-10 offset-sm-2">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="gridCheck1">
                <label class="form-check-label" for="gridCheck1">
                Example checkbox
                </label>
            </div>
            </div>
        </div> -->
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>