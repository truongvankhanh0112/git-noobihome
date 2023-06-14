<?php
    class danhmuc extends dcontroller
    {
        public function __construct()
        {
            parent::__construct();
        }
        public function danhmucsanpham($iddm){
            $this->load->view('header');
            $danhmucmodel = $this->load->model('danhmucmodel');
            $homemodel = $this->load->model('homemodel');
            $danhmuc = 'danhmuc';
            $loaidm = 'loaidm';
            $sanpham = 'sanpham';
            $cond = 'iddm='.$iddm;
            
            $data['danhmuc'] = $danhmucmodel->select_danhmuc($danhmuc);
            $data['loaidm'] = $danhmucmodel->select_danhmuc($loaidm);
            $data['sanpham'] = $homemodel->san_pham_theo_danh_muc($sanpham,$cond);
            $this->load->view('menu', $data);

            $data['danhmuc'] = $danhmucmodel->danhmuc_byid($danhmuc, $cond);
            $this->load->view('sanpham_danhmuc', $data);
            $this->load->view('footer');
        }
        public function loaidanhmucsanpham($idloaidm){
            $this->load->view('header');
            $danhmucmodel = $this->load->model('danhmucmodel');
            $homemodel = $this->load->model('homemodel');
            $danhmuc = 'danhmuc';
            $loaidm = 'loaidm';
            $sanpham = 'sanpham';
            $cond = 'idloaidm='.$idloaidm;
            // $condiddm = 'iddm='.$iddm;
            $data['danhmuc'] = $danhmucmodel->select_danhmuc($danhmuc);
            $data['loaidm'] = $danhmucmodel->select_danhmuc($loaidm);
            $data['sanpham'] = $homemodel->san_pham_theo_danh_muc($sanpham,$cond);
            $this->load->view('menu', $data);

            $data['dm_loaidm'] = $homemodel->select_loaidm($danhmuc, $loaidm);
            // $data['dm_byid']=$danhmucmodel->danhmuc_byid($loaidm, $condiddm);
            $data['loaidm_byid']=$danhmucmodel->danhmuc_byid($loaidm, $cond);
            $this->load->view('sanpham_loaidanhmuc', $data);
            
            $this->load->view('footer');
       }
    //Quản trị viên
        public function dsdm(){
            $this->load->quantri('header-dashboard');
            
            $homemodel = $this->load->model('danhmucmodel');
            $danhmuc = 'danhmuc';
            $data['danhmuc'] = $homemodel->select_danhmuc($danhmuc);
            $this->load->quantri('danhmuc/dsdm', $data);
            $this->load->quantri('footer-dashboard');
        }
        public function themdanhmuc(){
            $this->load->quantri('header-dashboard');
            $this->load->quantri('danhmuc/themdanhmuc');
            $this->load->quantri('footer-dashboard');
        }
        public function insert_danhmuc(){
            $danhmucmodel = $this->load->model('danhmucmodel');
            $danhmuc = 'danhmuc';
            $tendm = $_POST['tendm'];
            $noibat = $_POST['noibat'];
            $data = array(
                'tendm'=> $tendm,
                'noibat'=> $noibat
            );
            $result = $danhmucmodel->insert_danhmuc($danhmuc, $data);
            if ($result==1) {
                $message['msg'] = "Thêm thành công";
                header('Location:'.BASE_URL."danhmuc/themdanhmuc?msg=".urlencode(serialize($message)));
            }else{
                $message['msg'] = "Thêm Thất bại";
                header('Location:'.BASE_URL."danhmuc/themdanhmuc?msg=".urlencode(serialize($message)));
            }
            $this->load->quantri('danhmuc/themdanhmuc', $message);
        }
        public function edit_danhmuc($iddm){
            $danhmucmodel = $this->load->model('danhmucmodel');
            $danhmuc = 'danhmuc';
            $iddm = 'iddm='.$iddm;
            $data['danhmuc'] = $danhmucmodel->danhmuc_byid($danhmuc, $iddm);
            
            $this->load->quantri('header-dashboard');
            $this->load->quantri('danhmuc/suadanhmuc', $data);
            $this->load->quantri('footer-dashboard');
        }
        public function update_danhmuc($iddm){
            $danhmuc = 'danhmuc';
            $iddm = 'iddm='.$iddm;
            $tendm = $_POST['tendm'];
            $noibat = $_POST['noibat'];
            $data = array(
                'tendm'=> $tendm,
                'noibat'=> $noibat
            );
            $danhmucmodel = $this->load->model('danhmucmodel');
            $result = $danhmucmodel->update_danhmuc($danhmuc, $data, $iddm);
            // echo $result;
            if ($result==1) {
                $message['msg'] = "Thay đổi thành công";
                header('Location:'.BASE_URL."danhmuc/themdanhmuc?msg=".urlencode(serialize($message)));
            }else{
                $message['msg'] = "Thay đổi Thất bại";
                header('Location:'.BASE_URL."danhmuc/themdanhmuc?msg=".urlencode(serialize($message)));
            }
            $this->load->quantri('danhmuc/themdanhmuc', $message);
        }
        public function delete_danhmuc($iddm){
            $danhmucmodel = $this->load->model('danhmucmodel');
            $danhmuc = 'danhmuc';
            $iddm = "iddm='$iddm'";
            $result = $danhmucmodel->delete_danhmuc($danhmuc, $iddm);
            if ($result==1) {
                $message['msg'] = "Xóa thành công";
                header('Location:'.BASE_URL."danhmuc/dsdm?msg=".urlencode(serialize($message)));
            }else{
                $message['msg'] = "Xóa Thất bại";
                header('Location:'.BASE_URL."danhmuc/dsdm?msg=".urlencode(serialize($message)));
            }
            $this->load->quantri('danhmuc/dsdm', $message);
        }
        public function dsloaidm(){
            $this->load->quantri('header-dashboard');
            $homemodel = $this->load->model('homemodel');
            $loaidm = 'loaidm';
            $danhmuc = 'danhmuc';
            $data['loaidm'] = $homemodel->select_loaidm($danhmuc, $loaidm);
            $this->load->quantri('danhmuc/dsloaidm', $data);
            $this->load->quantri('footer-dashboard');
        }
        public function themloaidanhmuc(){
            $this->load->quantri('header-dashboard');
            
            $homemodel = $this->load->model('danhmucmodel');
            $danhmuc = 'danhmuc';
            $data['danhmuc'] = $homemodel->select_danhmuc($danhmuc);
            $this->load->quantri('danhmuc/themloaidanhmuc', $data);
            $this->load->quantri('footer-dashboard');
        }
        public function insert_loaidanhmuc(){
            
            $danhmucmodel = $this->load->model('danhmucmodel');
            $loaidm = 'loaidm';
            $tenloaidm = $_POST['tenloaidm'];
            $iddm = $_POST['iddm'];
            $data = array(
                'tenloaidm'=> $tenloaidm,
                'iddm'=> $iddm
            );
            $result = $danhmucmodel->insert_danhmuc($loaidm, $data);
            if ($result==1) {
                $message['msg'] = "Thêm thành công";
                header('Location:'.BASE_URL."danhmuc/themloaidanhmuc?msg=".urlencode(serialize($message)));
            }else{
                $message['msg'] = "Thêm Thất bại";
                header('Location:'.BASE_URL."danhmuc/themloaidanhmuc?msg=".urlencode(serialize($message)));
            }
            $this->load->quantri('danhmuc/themloaidanhmuc', $message);
        }
        public function delete_loaidanhmuc($idloaidm){
            $danhmucmodel = $this->load->model('danhmucmodel');
            $loaidm = 'loaidm';
            $idloaidm = "idloaidm='$idloaidm'";
            $result = $danhmucmodel->delete_danhmuc($loaidm, $idloaidm);
            if ($result==1) {
                $message['msg'] = "Xóa thành công";
                header('Location:'.BASE_URL."danhmuc/dsloaidm?msg=".urlencode(serialize($message)));
            }else{
                $message['msg'] = "Xóa Thất bại";
                header('Location:'.BASE_URL."danhmuc/dsloaidm?msg=".urlencode(serialize($message)));
            }
            $this->load->quantri('danhmuc/dsloaidm', $message);
        }
        public function edit_loaidanhmuc($idloaidm){
            $danhmucmodel = $this->load->model('danhmucmodel');
            $danhmuc = 'danhmuc';
            $loaidm = 'loaidm';
            
            $cond = $idloaidm;
            $data['danhmuc'] = $danhmucmodel->select_danhmuc($danhmuc);
            $data['loaidm'] = $danhmucmodel->loaidanhmuc_byid( $danhmuc, $loaidm,$cond);

            $this->load->quantri('header-dashboard');
            $this->load->quantri('danhmuc/sualoaidm', $data);
            $this->load->quantri('footer-dashboard');
        }
        public function update_loaidanhmuc($idloaidm){
            $danhmucmodel = $this->load->model('danhmucmodel');
            $loaidm = 'loaidm';
            $cond = 'idloaidm='.$idloaidm;
            $tenloaidm = $_POST['tenloaidm'];
            $iddm = $_POST['iddm'];
            $data = array(
                'tenloaidm'=> $tenloaidm,
                'iddm'=> $iddm
            );
            $result = $danhmucmodel->update_danhmuc($loaidm, $data, $cond);
            // echo $result;
            if ($result==1) {
                $message['msg'] = "Thay đổi thành công";
                header('Location:'.BASE_URL."danhmuc/themloaidanhmuc?msg=".urlencode(serialize($message)));
            }else{
                $message['msg'] = "Thay đổi Thất bại";
                header('Location:'.BASE_URL."danhmuc/themloaidanhmuc?msg=".urlencode(serialize($message)));
            }
            $this->load->quantri('danhmuc/themloaidanhmuc', $message);
        }
    }
    
?>