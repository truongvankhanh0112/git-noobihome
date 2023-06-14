<?php
    class giohang extends dcontroller{
        public function show(){
            $this->load->view('header');
            $danhmucmodel = $this->load->model('danhmucmodel');
            $homemodel = $this->load->model('homemodel');
            $danhmuc = 'danhmuc';
            $loaidm = 'loaidm';
            $sanpham = 'sanpham';
            $data['danhmuc'] = $danhmucmodel->select_danhmuc($danhmuc);
            $data['danhmuc1'] = $homemodel->select_danhmuc_home($danhmuc);
            $data['loaidm'] = $danhmucmodel->select_danhmuc($loaidm);
            $data['sanpham'] = $homemodel->sanpham_home($sanpham);
            $this->load->view('menu', $data);
            $this->load->view('cart');
            $this->load->view('footer');
        }

        public function addDonhang(){
            $giohangmodel = $this->load->model('giohangmodel');
            $khuyenmaimodel = $this->load->model('khuyenmaimodel');
            $ctdh = 'ctdh';

            if (isset($_SESSION['account'][0]['idtk'])) {
                # code...
                $idtk = $_SESSION['account'][0]['idtk'];
                $diachinhanhang = $_POST['diachi'];
                $address_huyen = $_POST['calc_shipping_district'];
                $address_tinh = $_POST['calc_shipping_provinces'];
                $diachi = $diachinhanhang.', '. $address_huyen.', '.$address_tinh;
                $sdt = $_SESSION['account'][0]['sdt'];
                $ghichu = $_SESSION['note'];
                
                if (isset($_POST['tongtiendonhang'])) {
                    # code...
                    $tongtien = $_POST['tongtiendonhang'];
                }else{
                    $tongtien = 0;
                    for ($i=0; $i < count($_SESSION['mycart']); $i++) { 
                        
                        $idsp = $_SESSION['mycart'][$i]['id'];
                        $thanhtien = (int)$_SESSION['mycart'][$i]['giasp'] * (int)$_SESSION['mycart'][$i]['sl'];
                        $tongtien+=$thanhtien;
                    }
                }
                date_default_timezone_set('Asia/Ho_Chi_Minh');
                $today = date("Y/m/d");
                $trangthaidonhang = 1;
                $thanhtoan = 0;    
                $sanpham = 'sanpham';
                $khuyenmai = 'khuyenmai';

                $sanphammodel = $this->load->model('sanphammodel');
                foreach ($_SESSION['mycart'] as $key => $cart) {
                    $id = 'idsp='.$cart['id'];
                    $sp = $sanphammodel->sanpham_byid($sanpham, $id);

                    if ($sp[0]['soluong'] < $cart['sl']) {
                        # code...
                        $message['msg'] = $sp[0]['tensp']." vượt quá số lượng, Bạn vui lòng thay đổi lại cho phù hợp để tiếp tục đặt hàng!";
                        header("Location:".BASE_URL."giohang/show?msg=".urlencode(serialize($message)));
                        exit();
                    }
                }
                foreach ($_SESSION['mycart'] as $key => $cart) {
                    $id = 'idsp='.$cart['id'];
                    $sp = $sanphammodel->sanpham_byid($sanpham, $id);
                    $new_sl = $sp[0]['soluong'] - $cart['sl'];
                    $data_new_sl = array(
                        'soluong' => $new_sl
                    );
                    if ($new_sl <= 0) {
                        $data_new_tinhtrang = array(
                            'tinhtrang' => 2
                        );
                        $sanphammodel->update_sanpham($sanpham, $data_new_tinhtrang, $id);
                    }
                    $sanphammodel->update_sanpham($sanpham, $data_new_sl, $id);
                }
                if (isset($_POST['idkm'])) {
                    $id_km = $_POST['idkm'];
                    $idKM = 'id_km='.$id_km;
                    $a = $khuyenmaimodel->select_khuyenmai_byid($khuyenmai, $idKM);
                        $data = array(
                            'soluongma' => $a[0]['soluongma'] - 1
                        );
                        $khuyenmaimodel->update_soluongmakhuyenmai($khuyenmai, $data ,$idKM);
                        $iddonhang = $giohangmodel->insert_LastInsertId_km($idtk, $tongtien, $today, $diachi, $sdt, $ghichu, $id_km, $trangthaidonhang, $thanhtoan);
                        for ($i=0; $i < count($_SESSION['mycart']); $i++) { 
                            $data_ctdh = array(
                                'idtk' => $idtk,
                                'idSp' => $_SESSION['mycart'][$i]['id'],
                                'soluong' => $_SESSION['mycart'][$i]['sl'],
                                'dongia' => $_SESSION['mycart'][$i]['giasp'],
                                'thanhtien' => (int)$_SESSION['mycart'][$i]['giasp'] * (int)$_SESSION['mycart'][$i]['sl'] ,
                                'iddonhang' => $iddonhang
                            );
                            $giohangmodel->insert_donhang($ctdh, $data_ctdh);
                        }
                    unset($_SESSION['mycart']);
                    unset($_SESSION['note']);
                    $cond_DH = 'iddonhang='.$iddonhang;
                    $load_DH = $giohangmodel->DH_byId('donhang', $cond_DH);

                    $this->dh($load_DH);
                    exit();
                }else{
                    $iddonhang = $giohangmodel->insert_LastInsertId($idtk, $tongtien, $today, $diachi, $sdt, $ghichu, $trangthaidonhang, $thanhtoan);
                        for ($i=0; $i < count($_SESSION['mycart']); $i++) { 
                            $data_ctdh = array(
                                'idtk' => $idtk,
                                'idSp' => $_SESSION['mycart'][$i]['id'],
                                'soluong' => $_SESSION['mycart'][$i]['sl'],
                                'dongia' => $_SESSION['mycart'][$i]['giasp'],
                                'thanhtien' => (int)$_SESSION['mycart'][$i]['giasp'] * (int)$_SESSION['mycart'][$i]['sl'] ,
                                'iddonhang' => $iddonhang
                            );
                            $giohangmodel->insert_donhang($ctdh, $data_ctdh);
                        }
                    unset($_SESSION['mycart']);
                    unset($_SESSION['note']);
                    $cond_DH = 'iddonhang='.$iddonhang;
                    $load_DH = $giohangmodel->DH_byId('donhang', $cond_DH);

                    $this->dh($load_DH);
                }
            }
        }
        public function deleteCart()
        {
            # code...
            echo "<script>localStorage.removeItem('cart');</script>";
        }
        public function checkout(){
            if (isset($_SESSION['mycart'])) {
                $this->load->view('checkout');
            }else{
                $message['msg'] = "Đăng ký tài khoản hoặc đăng nhập để tiến hành thanh toán !!";
                header('Location:'.BASE_URL."login/dangky?msg=".urlencode(serialize($message)));
                $this->show();
            }
        }
        public function aaaa()
        {
            if (isset($_SESSION['account'][0]['idtk'])) {
                # code...            
                $_SESSION['mycart'] = $_POST['storage'];
                $_SESSION['note'] = $_POST['note'];
                $this->checkout();
            }else{
                $message['msg'] = "Đăng ký tài khoản để tiếp tục mua hàng !!";
                header('Location:'.BASE_URL."login/dangky?msg=".urlencode(serialize($message)));
            }
        }
        public function vnpay(){
            $sanpham = 'sanpham';
            $sanphammodel = $this->load->model('sanphammodel');

            foreach ($_SESSION['mycart'] as $key => $cart) {
                # code...
                $id = 'idsp='.$cart['id'];
                $sp = $sanphammodel->sanpham_byid($sanpham, $id);
                if ($sp[0]['soluong'] < $cart['sl']) {
                    # code...
                    $message['msg'] = $sp[0]['tensp']." vượt quá số lượng, Bạn vui lòng thay đổi lại cho phù hợp để tiếp tục đặt hàng!";
                    header("Location:".BASE_URL."giohang/show?msg=".urlencode(serialize($message)));
                    exit();
                }else{
                    date_default_timezone_set('Asia/Ho_Chi_Minh');
                    $vnp_TmnCode = "U447I44E"; //Mã định danh merchant kết nối (Terminal Id)
                    $vnp_HashSecret = "UHRDCVOTSGIKOSPCHPARGVIKLHSIJEMI"; //Secret key
                    $vnp_Url = "https://sandbox.vnpayment.vn/paymentv2/vpcpay.html";
                    $vnp_Returnurl = "http://localhost/testnoobi/giohang/vnpayReturn";
                    $vnp_apiUrl = "http://sandbox.vnpayment.vn/merchant_webapi/merchant.html";
                    $apiUrl = "https://sandbox.vnpayment.vn/merchant_webapi/api/transaction";
                    //Config input format
                    //Expire
                    $startTime = date("YmdHis");
                    $expire = date('YmdHis',strtotime('+15 minutes',strtotime($startTime)));
                    //create payment
                    $vnp_TxnRef = rand(1,10000); //Mã giao dịch thanh toán tham chiếu của merchant
                    $vnp_Amount = $_POST['tongtiendonhang']; // Số tiền thanh toán
                    $_SESSION['tongtienKM'] = $_POST['tongtiendonhang'];
                    $vnp_Locale = 'vn'; //Ngôn ngữ chuyển hướng thanh toán
                    $vnp_BankCode = 'NCB'; //Mã phương thức thanh toán
                    $vnp_IpAddr = $_SERVER['REMOTE_ADDR']; //IP Khách hàng thanh toán

                    $inputData = array(
                        "vnp_Version" => "2.1.0",
                        "vnp_TmnCode" => $vnp_TmnCode,
                        "vnp_Amount" => $vnp_Amount* 100,
                        "vnp_Command" => "pay",
                        "vnp_CreateDate" => date('YmdHis'),
                        "vnp_CurrCode" => "VND",
                        "vnp_IpAddr" => $vnp_IpAddr,
                        "vnp_Locale" => $vnp_Locale,
                        "vnp_OrderInfo" => $vnp_TxnRef,
                        "vnp_OrderType" => "other",
                        "vnp_ReturnUrl" => $vnp_Returnurl,
                        "vnp_TxnRef" => $vnp_TxnRef,
                        "vnp_ExpireDate"=>$expire
                    );

                    if (isset($vnp_BankCode) && $vnp_BankCode != "") {
                        $inputData['vnp_BankCode'] = $vnp_BankCode;
                    }

                    ksort($inputData);
                    $query = "";
                    $i = 0;
                    $hashdata = "";
                    foreach ($inputData as $key => $value) {
                        if ($i == 1) {
                            $hashdata .= '&' . urlencode($key) . "=" . urlencode($value);
                        } else {
                            $hashdata .= urlencode($key) . "=" . urlencode($value);
                            $i = 1;
                        }
                        $query .= urlencode($key) . "=" . urlencode($value) . '&';
                    }

                    $vnp_Url = $vnp_Url . "?" . $query;
                    if (isset($vnp_HashSecret)) {
                        $vnpSecureHash =   hash_hmac('sha512', $hashdata, $vnp_HashSecret);//  
                        $vnp_Url .= 'vnp_SecureHash=' . $vnpSecureHash;
                    }
                    header('Location: ' . $vnp_Url);
                    die();
                }
        }
        }
        public function vnpayReturn(){
            $giohangmodel = $this->load->model('giohangmodel');
            $khuyenmaimodel = $this->load->model('khuyenmaimodel');
            $sanphammodel = $this->load->model('sanphammodel');

            $ctdh = 'ctdh';
            $donhang ='donhang';
            $khuyenmai = 'khuyenmai';
            $sanpham = 'sanpham';
            $vnp_HashSecret = "UHRDCVOTSGIKOSPCHPARGVIKLHSIJEMI"; //Secret key
            $vnp_SecureHash = $_GET['vnp_SecureHash'];
            $inputData = array();
            foreach ($_GET as $key => $value) {
                if (substr($key, 0, 4) == "vnp_") {
                    $inputData[$key] = $value;
                }
            }
            
            unset($inputData['vnp_SecureHash']);
            ksort($inputData);
            $i = 0;
            $hashData = "";
            foreach ($inputData as $key => $value) {
                if ($i == 1) {
                    $hashData = $hashData . '&' . urlencode($key) . "=" . urlencode($value);
                } else {
                    $hashData = $hashData . urlencode($key) . "=" . urlencode($value);
                    $i = 1;
                }
            }
    
            $secureHash = hash_hmac('sha512', $hashData, $vnp_HashSecret);
            if ($secureHash == $vnp_SecureHash) {
                if ($_GET['vnp_ResponseCode'] == '00') {

                    // echo "GD Thanh cong";

                    if ($_SESSION['account'][0]['idtk'] == "") {
                        $message['msg'] = "Bạn chưa có địa chỉ, Vui lòng thêm địa chỉ để tiếp tục mua hàng";
                        header("Location:".BASE_URL."index/addDiachi?msg=".urlencode(serialize($message)));
                    }else{
                        $idtk = $_SESSION['account'][0]['idtk'];
                        $diachi = $_SESSION['account'][0]['diachi'];
                        $sdt = $_SESSION['account'][0]['sdt'];
                        $ghichu = $_SESSION['note'];
                        // session lấy từ hàm vnpay()
                        $tongtien = $_SESSION['tongtienKM'];

                        date_default_timezone_set('Asia/Ho_Chi_Minh');
                        $today = date("Y/m/d");
                        $trangthaidonhang = 1;   
                        $thanhtoan = 1; 

                        foreach ($_SESSION['mycart'] as $key => $cart) {
                            # code...
                            $id = 'idsp='.$cart['id'];
                            $sp = $sanphammodel->sanpham_byid($sanpham, $id);
                            if ($sp[0]['soluong'] < $cart['sl']) {
                                # code...
                                $message['msg'] = $sp[0]['tensp']." vượt quá số lượng, Bạn vui lòng thay đổi lại cho phù hợp để tiếp tục đặt hàng!";
                                header("Location:".BASE_URL."giohang/show?msg=".urlencode(serialize($message)));
                                exit();
                            }
                        }
                        if (isset($_POST['idkm'])) {
                            $id_km = $_POST['idkm'];
                            $idKM = 'id_km='.$id_km;
                            $a = $khuyenmaimodel->select_khuyenmai_byid($khuyenmai, $idKM);
                                $data = array(
                                    'soluongma' => $a[0]['soluongma'] - 1
                                );
                                $khuyenmaimodel->update_soluongmakhuyenmai($khuyenmai, $data ,$idKM);
                                $iddonhang = $giohangmodel->insert_LastInsertId_km($idtk, $tongtien, $today, $diachi, $sdt, $ghichu, $id_km, $trangthaidonhang, $thanhtoan);
                                for ($i=0; $i < count($_SESSION['mycart']); $i++) { 
                                    $data_ctdh = array(
                                        'idtk' => $idtk,
                                        'idSp' => $_SESSION['mycart'][$i]['id'],
                                        'soluong' => $_SESSION['mycart'][$i]['sl'],
                                        'dongia' => $_SESSION['mycart'][$i]['giasp'],
                                        'thanhtien' => (int)$_SESSION['mycart'][$i]['giasp'] * (int)$_SESSION['mycart'][$i]['sl'] ,
                                        'iddonhang' => $iddonhang
                                    );
                                    $giohangmodel->insert_donhang($ctdh, $data_ctdh);
                                }
                            unset($_SESSION['mycart']);
                            unset($_SESSION['note']);
                            $cond_DH = 'iddonhang='.$iddonhang;
                            $load_DH = $giohangmodel->DH_byId('donhang', $cond_DH);

                            $this->dh($load_DH);
                            exit();
                        }else{
                            $iddonhang = $giohangmodel->insert_LastInsertId($idtk, $tongtien, $today, $diachi, $sdt, $ghichu, $trangthaidonhang, $thanhtoan);
                                for ($i=0; $i < count($_SESSION['mycart']); $i++) { 
                                    $data_ctdh = array(
                                        'idtk' => $idtk,
                                        'idSp' => $_SESSION['mycart'][$i]['id'],
                                        'soluong' => $_SESSION['mycart'][$i]['sl'],
                                        'dongia' => $_SESSION['mycart'][$i]['giasp'],
                                        'thanhtien' => (int)$_SESSION['mycart'][$i]['giasp'] * (int)$_SESSION['mycart'][$i]['sl'] ,
                                        'iddonhang' => $iddonhang
                                    );
                                    $giohangmodel->insert_donhang($ctdh, $data_ctdh);
                                }
                            unset($_SESSION['mycart']);
                            unset($_SESSION['note']);
                            $cond_DH = 'iddonhang='.$iddonhang;
                            $load_DH = $giohangmodel->DH_byId('donhang', $cond_DH);

                            $this->dh($load_DH);
                        }
                    }
                    }else {
                        // echo "GD Khong thanh cong";
                        echo '<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
                                <div class="container" style="width: 50%;">
                                    <figure class="text-center">
                                        <blockquote class="blockquote">
                                        <p>DG không thành công, vui lòng kiểm tra lại thông tin thanh toán online</p>
                                        </blockquote>
                                        <figcaption class="blockquote-footer">
                                            <cite  onclick="dele()" title="Source Title"><a href="'.BASE_URL.'giohang/show">Quay về.</a></cite>
                                        </figcaption>
                                    </figure>
                                </div>';
                    }
            } else {
                echo "Chu ky khong hop le";
                }
            

        }
        public function dh($load_DH)
        {
            echo '<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
            <div class="container" style="width: 50%;">
                <figure class="text-center">
                    <blockquote class="blockquote">
                    <p>DG thành công. Cảm ơn bạn đã đặt hàng.</p>
                        <div class="text-start fs-6">
                            <p>Mã đơn hàng: <strong>'.$load_DH[0]['iddonhang'].'</strong></p>
                            <p>Thời gian đặt hàng: <strong>'.$load_DH[0]['ngayxuathd'].'</strong></p>
                            <p>Thông tin người nhận</p>
                            <p>Tên người nhận: <strong>'.$_SESSION['account'][0]['hoten'].'</strong></p>
                            <p>SDT: <strong>'.$_SESSION['account'][0]['sdt'].'</strong></p>
                            <p>Địa chỉ nhận hàng: <strong>'.$_SESSION['account'][0]['diachi'].'</strong></p>
                        </div>
                    </blockquote>
                    <figcaption class="blockquote-footer">
                        <cite  onclick="dele()" title="Source Title"><a href="'.BASE_URL.'login/taikhoancuatoi">Xem chi tiết đơn hàng.</a></cite>
                    </figcaption>
                </figure>
                <script>
                function dele(){
                    localStorage.removeItem("cart");
                }
                </script>
            </div>';
            die();
        }
        public function ctdh($iddonhang)
        {
            $this->load->view('header');
            $danhmucmodel = $this->load->model('danhmucmodel');
            $homemodel = $this->load->model('homemodel');
            $giohangmodel = $this->load->model('giohangmodel');

            $danhmuc = 'danhmuc';
            $loaidm = 'loaidm';
            $ctdh = 'ctdh';
            $sanpham = 'sanpham';
            $cond = 'iddonhang='.$iddonhang;

            $data['danhmuc'] = $danhmucmodel->select_danhmuc($danhmuc);
            $data['danhmuc1'] = $homemodel->select_danhmuc_home($danhmuc);
            $data['loaidm'] = $danhmucmodel->select_danhmuc($loaidm);
            $data['sanpham'] = $homemodel->select_sanpham($danhmuc, $sanpham, $loaidm);

            $this->load->view('menu', $data);

            $data['ctdh'] = $giohangmodel->ctdh_byId($ctdh, $cond);
            $this->load->view('chitietdonhang', $data);
            $this->load->view('footer');
        }
        public function dsDH()
        {
            $this->load->quantri('header-dashboard');
            $giohangmodel = $this->load->model('giohangmodel');
            $donhang = 'donhang';
            $taikhoan = 'taikhoan';
            $data['donhang'] = $giohangmodel->DH_select($donhang, $taikhoan);
            $this->load->quantri('giohang/dsDH', $data);
            $this->load->quantri('footer-dashboard');
        }
        function xemctdh($iddonhang){
            $this->load->quantri('header-dashboard');
            $giohangmodel = $this->load->model('giohangmodel');
            $sanphammodel = $this->load->model('sanphammodel');
            $cond = 'iddonhang='.$iddonhang;
            $data['donhang'] = $giohangmodel->DH_byId('donhang', $cond);
            
            $data['ctdh'] = $giohangmodel->DH_byId('ctdh', $cond);
            $data['user'] = $sanphammodel->select_sanpham('taikhoan');
            $data['sanpham'] = $sanphammodel->select_sanpham('sanpham');
            $this->load->quantri('giohang/chitietdonhang', $data);
            $this->load->quantri('footer-dashboard');
        }
        function ttdh(){
            $ttdh = $_POST['ttdh'];
            $iddonhang = 'iddonhang='.$_POST['iddonhang'];
            $donhang = 'donhang';
            $data = array(
                'trangthaidonhang'=> $ttdh
            );
            $this->load->model('giohangmodel')->update_ttdh($donhang, $data, $iddonhang);
        }
    }
?>