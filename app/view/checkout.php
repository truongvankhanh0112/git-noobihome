<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout-NoobiHome</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
    <div class="container fw-light" style="width: 80%; min-height: 670px;">
        <form action="<?php echo BASE_URL?>giohang/addDonhang" method="post">
            <div class="row">
                <div class="col text-secondary mt-5">
                    <nav aria-label="breadcrumb" style="font-size: 0.9rem">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?php echo BASE_URL?>">Trang chủ</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Thông tin giao hàng</li>
                        </ol>
                    </nav>
                    <p class="text-start text-lowercase"><i><?=$_SESSION['account'][0]['hoten']?> (<?=$_SESSION['account'][0]['email']?>)</i></p>
                    <div class="mb-3 text-start">
                        <label for="formGroupExampleInput" class="form-label ">Example label</label>
                        <input type="text" class="form-control" id="formGroupExampleInput" value="<?=$_SESSION['account'][0]['hoten']?>">
                    </div>
                    <div class="row border-bottom border-end border-top">
                        <div class="mb-3 text-start">
                            <label for="formGroupExampleInput2" class="form-label">Địa chỉ nhận hàng: </label>
                            <input type="text" class="form-control" name="diachi" id="formGroupExampleInput2" value="<?=$_SESSION['account'][0]['diachi']?>">
                        </div><br>
                        <div class="col-5">
                            <select class="form-select" aria-label="Default select example" name="calc_shipping_provinces" required="">
                                <option value="">Tỉnh / Thành phố</option>
                            </select>
                        </div>
                        <div class="col-5">
                            <select class="form-select" aria-label="Default select example" name="calc_shipping_district" required="">
                                <option value="">Quận / Huyện</option>
                            </select><br>
                        </div>
                            <input class="billing_address_1" name="address_1" type="hidden" value="">
                            <input class="billing_address_2" name="address_2" type="hidden" value="">
                        </div> <br>
                </div>
                <div class="col ms-5 bg-body-tertiary border-start text-start text-capitalize">
                    <div class="mt-5 border-bottom border-5" >
                        <?php 
                        $tongtien=0;
                        $stt=1;
                            for ($i=0; $i < count($_SESSION['mycart']); $i++) { 
                                $thanhtien = (int)$_SESSION['mycart'][$i]['giasp'] * (int)$_SESSION['mycart'][$i]['sl'];
                                $tongtien+=$thanhtien;
                        ?>
                            <div class="row ">
                                <div class="col-2">
                                    <p class="position-relative" style="width: 70px;">
                                        <img width="70px" src="<?php echo BASE_URL?>public/uploads/sanpham/<?=$_SESSION['mycart'][$i]['hinh']?>" alt="">
                                        <span  class="position-absolute top-0  translate-middle badge  text-bg-secondary">
                                            <?=$_SESSION['mycart'][$i]['sl']?>
                                        </span>
                                    </p>
                                </div>
                                <div class="col-5 text-break fw-medium">
                                    <?=$_SESSION['mycart'][$i]['tensp']?>
                                </div>
                                <div class="col-1 text-danger fw-medium">
                                    <?=number_format($_SESSION['mycart'][$i]['giasp'])?>đ
                                </div>
                            </div>
                        <?php
                            $stt++;
                            }
                        ?>
                    </div><br>
                    <div class="row">
                        <div class="col-sm">
                            <input name="makm" type="text" class="form-control" id="inputMaKM" placeholder="Nhập mã giảm giá">
                        </div>
                        <div class="col-sm">
                            <div><span id="getMaKM" class="btn btn-secondary">Áp dụng</span></div>
                        </div>
                        <div>
                            <?php
                                if (!empty($_GET['msg'])) {
                                    $msg = unserialize(urldecode($_GET['msg']));
                                    foreach ($msg as $key => $value) {
                            ?>
                            <div class="alert alert-success text-success alert-dismissible fade show" role="alert" style="width: 60%;">
                                <strong><?php echo "$value";?>!</strong>
                            </div>
                            <?php 
                                    }
                                }
                            ?>
                        </div>
                    </div><p></p>
                    <div>
                            <div class="fw-normal row pt-2">
                                <div class="col-2">Tạm tính: </div>
                                <div class="col-5"></div>
                                <div class="col-1"><?=number_format($tongtien) ?>đ</div>
                            </div> <br>
                            <div id="total"></div>
                    </div>
                </div>
            </div>
            <div class="mt-5">
                <button type="submit" style="width: 250px; height: 60px; border-radius: 0px;" class="btn btn-primary">Thanh toán</button>
            </div><br>
        </form>
        <div class="me-3">
            <form action="<?php echo BASE_URL?>giohang/vnpay" method="post">   
                <div><input type="hidden" id="tt" name="tongtiendonhang" value="<?=$tongtien?>"></div>                
                <button type="submit" style="width: 250px;  height: 60px; border-radius: 0px;" class="btn btn-primary border-bottom btn-default">Thanh toán VNPay</button>
            </form>
        </div>
    </div>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js'></script>
    <script src='https://cdn.jsdelivr.net/gh/vietblogdao/js/districts.min.js'></script>
    <script>
        $('#getMaKM').click(function(){
            var ma = $('#inputMaKM').val();
            // console.log(ma);
                $.ajax({
                    url: "<?php echo BASE_URL?>khuyenmai/apdungKM",
                    method: "post",
                    data: {	ma: ma
                        },
                    success:function(data, tong){
                        $('#total').html(data);
                        tong = $('#tongtiendonhang').val();
                        $('#tt').val(tong);
                        // console.log(tong);
                    }
                });
        });
    </script>
<script>
    //<![CDATA[
        if (address_2 = localStorage.getItem('address_2_saved')) {
        $('select[name="calc_shipping_district"] option').each(function() {
            if ($(this).text() == address_2) {
            $(this).attr('selected', '')
            }
        })
        $('input.billing_address_2').attr('value', address_2)
        }
        if (district = localStorage.getItem('district')) {
        $('select[name="calc_shipping_district"]').html(district)
        $('select[name="calc_shipping_district"]').on('change', function() {
            var target = $(this).children('option:selected')
            target.attr('selected', '')
            $('select[name="calc_shipping_district"] option').not(target).removeAttr('selected')
            address_2 = target.text()
            $('input.billing_address_2').attr('value', address_2)
            district = $('select[name="calc_shipping_district"]').html()
            localStorage.setItem('district', district)
            localStorage.setItem('address_2_saved', address_2)
        })
        }
        $('select[name="calc_shipping_provinces"]').each(function() {
        var $this = $(this),
            stc = ''
        c.forEach(function(i, e) {
            e += +1
            stc += '<option value=' + e + '>' + i + '</option>'
            $this.html('<option value="">Tỉnh / Thành phố</option>' + stc)
            if (address_1 = localStorage.getItem('address_1_saved')) {
            $('select[name="calc_shipping_provinces"] option').each(function() {
                if ($(this).text() == address_1) {
                $(this).attr('selected', '')
                }
            })
            $('input.billing_address_1').attr('value', address_1)
            }
            $this.on('change', function(i) {
            i = $this.children('option:selected').index() - 1
            var str = '',
                r = $this.val()
            if (r != '') {
                arr[i].forEach(function(el) {
                str += '<option value="' + el + '">' + el + '</option>'
                $('select[name="calc_shipping_district"]').html('<option value="">Quận / Huyện</option>' + str)
                })
                var address_1 = $this.children('option:selected').text()
                var district = $('select[name="calc_shipping_district"]').html()
                localStorage.setItem('address_1_saved', address_1)
                localStorage.setItem('district', district)
                $('select[name="calc_shipping_district"]').on('change', function() {
                var target = $(this).children('option:selected')
                target.attr('selected', '')
                $('select[name="calc_shipping_district"] option').not(target).removeAttr('selected')
                var address_2 = target.text()
                $('input.billing_address_2').attr('value', address_2)
                district = $('select[name="calc_shipping_district"]').html()
                localStorage.setItem('district', district)
                localStorage.setItem('address_2_saved', address_2)
                })
            } else {
                $('select[name="calc_shipping_district"]').html('<option value="">Quận / Huyện</option>')
                district = $('select[name="calc_shipping_district"]').html()
                localStorage.setItem('district', district)
                localStorage.removeItem('address_1_saved', address_1)
            }
            })
        })
        })
    //]]>
</script>
</body>
</html>
