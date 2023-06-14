<?php
    class sanpham extends dcontroller{
        public function __construct()
        {
            $data = array();
            parent::__construct();
        }
        public function index()
        {
            $this->dssp();
        }
        public function chitietsanpham($idsp){
            $this->load->view('header');
            $danhmucmodel = $this->load->model('danhmucmodel');
            $homemodel = $this->load->model('homemodel');
            $danhmuc = 'danhmuc';
            $loaidm = 'loaidm';
            $sanpham = 'sanpham';
            $cond = 'idsp='.$idsp;
            $data['danhmuc'] = $danhmucmodel->select_danhmuc($danhmuc);
            $data['loaidm'] = $danhmucmodel->select_danhmuc($loaidm);
            $data['sanpham'] = $homemodel->san_pham_theo_danh_muc($sanpham,$cond);
            $this->load->view('menu', $data);
            $this->load->view('chitietsanpham', $data);
            $this->load->view('footer');
        }
        public function dssp(){
            $this->load->quantri('header-dashboard');
            $homemodel = $this->load->model('homemodel');
            $danhmuc = 'danhmuc';
            $sanpham = 'sanpham';
            $loaidm = 'loaidm';
            $data['sanpham'] = $homemodel->select_sanpham($danhmuc, $sanpham, $loaidm);
            $this->load->quantri('sanpham/dssp',$data);
            $this->load->quantri('footer-dashboard');
        }
        public function themsanpham(){
            $this->load->quantri('header-dashboard');

            $homemodel = $this->load->model('danhmucmodel');
            $danhmuc = 'danhmuc';
            $loaidm = 'loaidm';

            $data['danhmuc'] = $homemodel->select_danhmuc($danhmuc);
            $data['loaidm'] = $homemodel->select_danhmuc($loaidm);
            $this->load->quantri('sanpham/themsanpham', $data);
            $this->load->quantri('footer-dashboard');
        }
        public function insert_sanpham(){

            $sanphammodel = $this->load->model('sanphammodel');
            $sanpham = 'sanpham';
            $tensp = $_POST['tensp'];
            $giasp = $_POST['giasp'];
            $chitiet = $_POST['chitiet'];
            $soluong = $_POST['soluong'];
            $hinhanh = $_FILES['hinhanh']['name'];
            $tmp_image = $_FILES['hinhanh']['tmp_name'];

            $div = explode('.', $hinhanh);
            $file_ext = strtolower (end($div));
            $unique_image = $div['0'].time().'.'.$file_ext;

            $path_upload = "public/uploads/sanpham/".$unique_image;
            $iddm = $_POST['iddm'];
            $idloadm = $_POST['idloaidm'];
            $noibat = $_POST['noibat'];
            $data = array(
                'tensp' => $tensp,
                'giasp' => $giasp,
                'chitiet' => $chitiet,
                'soluong'  => $soluong,
                'hinhanh' => $unique_image,
                'iddm' => $iddm,
                'idloaidm' => $idloadm,
                'noibat' => $noibat
            );
            $result = $sanphammodel->insert_sanpham($sanpham, $data);
            if ($result==1) {
                move_uploaded_file($tmp_image, $path_upload);
                $message['msg'] = "Thêm thành công";
                move_uploaded_file($tmp_image, $path_upload);
                header('Location:'.BASE_URL."sanpham/dssp?msg=".urlencode(serialize($message)));
            }else{
                $message['msg'] = "Thêm Thất bại";
                header('Location:'.BASE_URL."sanpham/dssp?msg=".urlencode(serialize($message)));
            }
        }
        public function delete_sanpham($idsp){
            $sanphammodel = $this->load->model('sanphammodel');
            $sanpham = 'sanpham';
            $idsp = "idsp='$idsp'";
            $result = $sanphammodel->delete_sanpham($sanpham, $idsp);
            if ($result==1) {
                $message['msg'] = "Xóa thành công";
                header('Location:'.BASE_URL."sanpham/dssp?msg=".urlencode(serialize($message)));
            }else{
                $message['msg'] = "Xóa Thất bại";
                header('Location:'.BASE_URL."sanpham/sanphammodel?msg=".urlencode(serialize($message)));
            }
            $this->load->quantri('danhmuc/dsdm', $message);
        }
        public function edit_sanpham($idsp){
            $this->load->quantri('header-dashboard');
            $sanphammodel = $this->load->model('sanphammodel');
            $danhmucmodel = $this->load->model('danhmucmodel');
            $danhmuc = 'danhmuc';
            $sanpham = 'sanpham';
            $loaidm = 'loaidm';
            $idsp ='idsp='.$idsp;
            $data['sanpham'] = $sanphammodel->sanpham_byid($sanpham, $idsp);
            $data['danhmuc'] = $danhmucmodel->select_danhmuc($danhmuc);
            $data['loaidm'] = $danhmucmodel->select_danhmuc($loaidm);
            $this->load->quantri('sanpham/suasp', $data);
            $this->load->quantri('footer-dashboard');
        }
        public function update_sanpham($idsp){
            $sanphammodel = $this->load->model('sanphammodel');
            $sanpham = 'sanpham';
            $cond = 'idsp='.$idsp;
            $tensp = $_POST['tensp'];
            $giasp = $_POST['giasp'];
            $chitiet = $_POST['chitiet'];
            $soluong = $_POST['soluong'];
            $hinhanh = $_FILES['hinhanh']['name'];
            $tmp_image = $_FILES['hinhanh']['tmp_name'];

            $div = explode('.', $hinhanh);
            $file_ext = strtolower (end($div));
            $unique_image = $div['0'].time().'.'.$file_ext;
            $path_upload = "public/uploads/sanpham/".$unique_image;

            $iddm = $_POST['iddm'];
            $idloadm = $_POST['idloaidm'];
            $noibat = $_POST['noibat'];
            if ($hinhanh) {
                # code...
                $data['sanpham_byid'] = $sanphammodel->sanpham_byid($sanpham, $cond);
                foreach ($data['sanpham_byid'] as $key => $value) {
                    # code...
                    if ($value['hinhanh']) {
                        unlink("public/uploads/sanpham/".$value['hinhanh']);
                    }
                }
                $data = array(
                    'tensp' => $tensp,
                    'giasp' => $giasp,
                    'chitiet' => $chitiet,
                    'soluong'  => $soluong,
                    'hinhanh' => $unique_image,
                    'iddm' => $iddm,
                    'idloaidm' => $idloadm,
                    'noibat' => $noibat
                );
                move_uploaded_file($tmp_image, $path_upload);
            }else {
                # code...
                $data = array(
                    'tensp' => $tensp,
                    'giasp' => $giasp,
                    'chitiet' => $chitiet,
                    'soluong'  => $soluong,
                    // 'hinhanh' => $unique_image,
                    'iddm' => $iddm,
                    'idloaidm' => $idloadm,
                    'noibat' => $noibat
                );
            }
            
            $result = $sanphammodel->update_sanpham($sanpham, $data, $cond);
            if ($result==1) {
                $message['msg'] = "Cập nhật thành công";
                header('Location:'.BASE_URL."sanpham/dssp?msg=".urlencode(serialize($message)));
            }else{
                $message['msg'] = "Cập nhật Thất bại";
                header('Location:'.BASE_URL."sanpham/dssp?msg=".urlencode(serialize($message)));
            }
        }
        
    }
?>