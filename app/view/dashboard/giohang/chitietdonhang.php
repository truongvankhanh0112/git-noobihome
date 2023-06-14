<div class="table " style="width: 90%;">
    <style>
        #ttdh{
            border: 0px;
            outline: none;
            color: green;

        }
    </style>
    <table class="justify-content-center" style="margin: auto; width: 100%;">
        <tr>
            <th></th>
            <th></th>
            <th>Tên</th>
            <th>Đơn giá</th>
            <th>SL</th>
            <th>thành tiền</th>
        </tr>
        <tbody>
    <?php
        foreach ($donhang as $key => $donhang) {
            # code...
            foreach ($user as $key => $user) {
                # code...
                if ($donhang['idtk']==$user['idtk']) {
                    # code...
                    echo '<div>Tên khách hàng: <strong>'.$user['hoten'].'</strong></div><p></p>';
                }
            }
            echo '
                <div>Địa chỉ nhận hàng: <strong>'.$donhang['diachinhanhang'].'</strong></div>
                <div>Số điện thoại: <strong>'.$donhang['sdt'].'</strong></div>
                <strong>Ghi chú cho đơn hàng: </strong><strong class="text-danger"></br>'.$donhang['ghichu'].'</strong> <p></p>
                <input type="hidden" id="iddonhang" value="'.$donhang['iddonhang'].'">
                <select name="trangthaidonhang" id="ttdh">
                    <option class="ttdh" value="'.$donhang['trangthaidonhang'].'">';
                    $ttdh = $donhang['trangthaidonhang'];
                    switch ($ttdh) {
                        case '1':
                            # code...
                            echo "Chưa xử lý";
                            break;
                        case '2':
                            # code...
                            echo "Đang giao";
                            break;
                        case '3':
                            # code...
                            echo "Hoàn thành";
                            break;
                        default:
                            # code...
                            break;
                    }
            echo    '</option>
                    <option class="ttdh" value="1">Chưa xử lý</option>
                    <option class="ttdh" value="2">Đang giao</option>
                    <option class="ttdh" value="3">Hoàn thành</option>
                </select><p></p>
                ';
            foreach ($ctdh as $key => $ctdh) {
                # code...
                foreach ($sanpham as $key => $sp) {
                    # code...
                    if ($ctdh['idSp'] == $sp['idsp']) {
                        # code...
                        echo '
                            <tr>
                                <td>MÃ SP: <strong>#'.$sp['idsp'].'</strong></td>
                                <td><img width=70px; src="'.BASE_URL.'public/uploads/sanpham/'.$sp['hinhanh'].'" alt=""></td>
                                <td>'.$sp['tensp'].'</td>
                                <td>'.number_format($ctdh['dongia']).'đ</td>
                                <td>'.$ctdh['soluong'].'</td>
                                <td>'.number_format($ctdh['thanhtien']).'đ</td>
                            </tr>
                        ';
                    }
                }
            }
        }
    ?>
        </tbody>
    </table>
</div>

<script>
    $('#ttdh').on('click',function(){
        var ttdh = $("#ttdh").find(":selected").val();
        var iddonhang = $("#iddonhang").val();
        // console.log(ttdh);
        $.ajax({
            url: "<?php echo BASE_URL?>giohang/ttdh",
            method: 'POST',
            data: {ttdh: ttdh,
                    iddonhang: iddonhang},
            success: function(data){
            }
        });
    });
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>