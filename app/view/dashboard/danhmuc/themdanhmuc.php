<div class="col">
    <h4 class="header-title mb-3">Thêm danh mục sản phẩm mới</h4>

    <form class="form-horizontal mt-3" action="<?php echo BASE_URL?>danhmuc/insert_danhmuc" method="post">
        <div class="form-group row">
            <label for="text" class="col-md-3 control-label">Tên danh mục</label>
            <div class="col-md-9">
                <input name="tendm" type="text" class="form-control" id="inputEmail3" placeholder="tên danh mục">
            </div>
        </div>
        <div class="form-group row">
            <label for="text" class="col-md-3 control-label">nổi bật ?</label>
            <div class="col-md-9">
                <div class="col-md-9">
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
        <div class="form-group row justify-content-end">

        </div>
        <div class="form-group row justify-content-end mb-0">
            <div class="col-md-9">
                <button type="submit" class="btn btn-info">Submit</button>
            </div>
        </div>
    </form>
    <?php
        if (!empty($_GET['msg'])) {
            $msg = unserialize(urldecode($_GET['msg']));
            foreach ($msg as $key => $value) {
                echo "<span style='color: blue;'><h4>".$value."</h4></span>";
            }
        }
    ?>

</div>
