<?php
    class khuyenmai extends dcontroller{
        public function makhuyenmai(){
            $this->load->quantri('header-dashboard');
            $khuyenmaimodel = $this->load->model('khuyenmaimodel');
            $khuyenmai = 'khuyenmai';
            $data['khuyenmai']=$khuyenmaimodel->select_khuyenmai($khuyenmai);
            $this->load->quantri('khuyenmai/makhuyenmai', $data);
            $this->load->quantri('footer-dashboard');
        }
        function addKM(){
            $this->load->quantri('header-dashboard');
            $this->load->quantri('khuyenmai/addKM');
            $this->load->quantri('footer-dashboard');
        }
        public function insert_km()
        {
            # code...
            $khuyenmaimodel = $this->load->model('khuyenmaimodel');
            $khuyenmai = 'khuyenmai';
            $makm = $_POST['makm'];
            $soluongma = $_POST['soluongma'];
            $loaikm = $_POST['loaikm'];
            $giatri = $_POST['giatri'];
            $chitiet = $_POST['chitiet'];
            if ($khuyenmaimodel->getKhuyenmai($makm)) {
                $message['msg'] = "Mã khuyến mãi này đã tồn tại vui lòng tạo mã mới";
                header('Location:'.BASE_URL."khuyenmai/addKM?msg=".urlencode(serialize($message)));
                $this->load->quantri('khuyenmai/addKM', $message);
            }else{
                $data = array(
                    'maKhuyenMai' => $makm,
                    'soluongma' => $soluongma,
                    $loaikm => $giatri,
                    'chitiet' => $chitiet
                );
            }
            $khuyenmaimodel->insert_km($khuyenmai, $data);
            header("Location:".BASE_URL."khuyenmai/makhuyenmai");
        }
        public function delete($id_km)
        {
            $id = "id_km='$id_km'";
            $khuyenmaimodel = $this->load->model('khuyenmaimodel');
            $khuyenmai = 'khuyenmai';
            $result = $khuyenmaimodel->delete_km($khuyenmai, $id);
            if ($result==1) {
                $message['msg'] = "Xóa thành công";
                header('Location:'.BASE_URL."khuyenmai/makhuyenmai?msg=".urlencode(serialize($message)));
            }else{
                $message['msg'] = "Xóa Thất bại";
                header('Location:'.BASE_URL."khuyenmai/makhuyenmai?msg=".urlencode(serialize($message)));
            }
            $this->load->quantri('khuyenmai/makhuyenmai', $message);
        }
        public function apdungKM(){
            $conn = mysqli_connect("localhost", "root", "", "noobihome");
            $makm = $_POST['ma'];
            $sql = "SELECT * FROM `khuyenmai` WHERE maKhuyenMai='$makm'";
            $result = $conn->query($sql);
            
            $tongtien=0;
            for ($i=0; $i < count($_SESSION['mycart']); $i++) { 
                $thanhtien = (int)$_SESSION['mycart'][$i]['giasp'] * (int)$_SESSION['mycart'][$i]['sl'];
                $tongtien+=$thanhtien;
            }
            $output = '';
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    if ($row['soluongma'] <= 0) {
                        # code...
                        $output = '
                                <div class="text-danger fw-medium">Mã Không tồn tại hoặc đã hết lượt sử dụng! Vui lòng kiểm tra lại.</div>';
                        echo $output;
                        die();
                    }else{
                        # code...
                        if ($row['giatien'] > 0) {
                        $tong = $tongtien - $row['giatien'];
                            if ($tong < 0) {
                                $tong = 0;
                                $output = '
                                    <div class="fw-normal row pt-2" id="hienmaKM">
                                        <div class="col-2">Giảm giá: </div>
                                        <div class="col-5"></div>
                                        <div class="col-1">-'.number_format($row['giatien']).'đ</div>
                                    </div>
                                    <br><br>
                                    <div class="fw-normal row border-bottom border-2">
                                        <div class="col-2 pt-2">Tổng tiền: </div>
                                        <div class="col-5"></div>
                                        <div class="col-1 fs-3 fw-medium text">'.$tong.'đ</div>
                                    </div>
                                    <input type="hidden" name="idkm" value="'.$row['id_km'].'">
                                    <input type="hidden" id="tongtiendonhang"  name="tongtiendonhang" value="'.$tong.'">
                                ';
                            }else{
                                $output = '
                                    <div class="fw-normal row pt-2" id="hienmaKM">
                                        <div class="col-2">Giảm giá: </div>
                                        <div class="col-5"></div>
                                        <div class="col-1">-'.number_format($row['giatien']).'đ</div>
                                    </div>
                                    <br><br>
                                    <div class="fw-normal row border-bottom border-2">
                                        <div class="col-2 pt-2">Tổng tiền: </div>
                                        <div class="col-5"></div>
                                        <div class="col-1 fs-3 fw-medium text">'.number_format($tong).'đ</div>
                                    </div>
                                    <input type="hidden" name="idkm" value="'.$row['id_km'].'">
                                    <input type="hidden" id="tongtiendonhang" name="tongtiendonhang" value="'.$tong.'">
                                ';
                            }
                        echo $output;
                    }else{
                        $tong = $tongtien - ($row['phantram']/100) * $tongtien;
                        $output = '
                            <div class="fw-normal row pt-2" id="hienmaKM">
                                <div class="col-2">Giảm giá: </div>
                                <div class="col-5"></div>
                                <div class="col-1">-'.$row['phantram'].'%</div>
                            </div>
                            <br>
                            <div class="fw-normal row border-bottom border-2">
                                <div class="col-2 pt-2">Tổng tiền: </div>
                                <div class="col-5"></div>
                                <div class="col-1 fs-3 fw-medium text">'.number_format($tong).'đ</div>
                            </div>
                            <input type="hidden" name="idkm" value="'.$row['id_km'].'">
                            <input type="hidden" id="tongtiendonhang" name="tongtiendonhang" value="'.$tong.'">
                        ';
                        echo $output;
                    }
                    }
                }
            }else{
                $output = '
                    <div class="text-danger">Mã Không tồn tại! Vui lòng kiểm tra lại.</div>
                    <div class="fw-normal row border-bottom border-2">
                        <div class="col-2 pt-2">Tổng tiền: </div>
                        <div class="col-5"></div>
                        <div class="col-1 fs-3 fw-medium text">'.number_format($tongtien).'đ</div>
                    </div>
                ';
                echo $output;
            }
        }
    }
?>