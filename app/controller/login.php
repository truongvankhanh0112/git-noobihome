<?php
    class login extends dcontroller{
        public function __construct()
        {
            $data = array();
            parent::__construct();
        }
        public function index()
        {
            $this->login();
        }
        public function login(){
            // session_start();
            $loginmodel = $this->load->model('loginmodel');
            $email = $_POST['email'];
            $pass = md5($_POST['pass']);
            $check = $loginmodel->getlogin('taikhoan',$email, $pass);

            if ($check) {
                # code...
                $_SESSION['account'] = $check;
                if ($_SESSION['account'][0]['loaitk'] == 1) {
                    header("Location:".BASE_URL."login/dashboard");
                }else{
                    header("Location:".BASE_URL."index");
                }
            }else{
                $message['msg'] = "Email hoặc Mật khẩu không chính xác.";
                header('Location:'.BASE_URL."?msg=".urlencode(serialize($message)));
                $this->load->view('menu', $message);
            }
        }
        public function dangky(){
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
            $this->load->view('dangky');
            $this->load->view('footer');
        }
        public function inserttk(){
            // session_start();
            $loginmodel = $this->load->model('loginmodel');
            $hoten = $_POST['hoten'];
            $gioitinh = $_POST['gioitinh'];
            $email = $_POST['email'];
            
            $pass = md5($_POST['pass']);
            $sdt = $_POST['sdt'];
            if ($loginmodel->checkEmail($email)) {
                // echo "<script>alert('')</script>";
                $message['msg'] = "Email đã tồn tại vui lòng Đăng ký bằng một Email mới .";
                header('Location:'.BASE_URL."login/dangky?msg=".urlencode(serialize($message)));
                $this->load->view('dangky', $message);
            }else{
                $data = array(
                    'email'=> $email,
                    'pass'=> $pass,
                    'hoten'=> $hoten,
                    'sdt' => $sdt,
                    'gioitinh'=> $gioitinh
                );
                $loginmodel->insert_tk('taikhoan', $data);
                $check = $loginmodel->getlogin('taikhoan',$email, $pass);
                $_SESSION['account'] = $check;
                // session::set('account', $check[0]['email']);
                // session::set('account', $check[1]['pass']);
                header("Location:".BASE_URL."index");
            }
            
        }
        public function taikhoancuatoi(){
            // session::init();
            $this->load->view('header');
            $danhmucmodel = $this->load->model('danhmucmodel');
            $homemodel = $this->load->model('homemodel');
            $idtk = 'idtk='.$_SESSION['account'][0]['idtk'];
            $danhmuc = 'danhmuc';
            $loaidm = 'loaidm';
            $sanpham = 'sanpham';
            $donhang = 'donhang';
            $data['danhmuc'] = $danhmucmodel->select_danhmuc($danhmuc);
            $data['danhmuc1'] = $homemodel->select_danhmuc_home($danhmuc);
            $data['loaidm'] = $danhmucmodel->select_danhmuc($loaidm);
            $data['sanpham'] = $homemodel->sanpham_home($sanpham);
            $data['donhang'] = $this->load->model('giohangmodel')->DH_byId($donhang, $idtk);
            $this->load->view('menu', $data);
            $this->load->view('taikhoancuatoi', $data);
            $this->load->view('footer');
        }
        public function update_taikhoan($idtk){
            $loginmodel = $this->load->model('loginmodel');
            $cond = 'idtk='.$idtk;
            $email = $_POST['email'];
            $hoten = $_POST['hoten'];
            $sdt = $_POST['sdt'];
            $gioitinh = $_POST['gioitinh'];
            $diachi = $_POST['diachi'];
            $data = array(
                'email'=> $email,
                'hoten'=> $hoten,
                'sdt' => $sdt,
                'gioitinh'=> $gioitinh,
                'diachi'=>$diachi
            );
            $result = $loginmodel->update_taikhoan('taikhoan', $data, $cond);
            $this->taikhoancuatoi();

        }
        public function dashboard(){
            if (isset($_SESSION['account']) && $_SESSION['account'][0]['loaitk'] == 1) {
                # code...
                $this->load->view('dashboard/header-dashboard');
                $this->load->view('dashboard/dashboard');
                $this->load->view('dashboard/footer-dashboard');    
            }else{
                $this->login();
            }
        }
        public function authentication_login(){
            $email = $_POST['email'];
            $pass = md5($_POST['pass']);
            $table = 'taikhoan';
            $loginmodel = $this->load->model('loginmodel');
            
            $count = $loginmodel->login($table, $email, $pass);
            // echo $count;
            if ($count==0) {
                # code...
                header("Location:".BASE_URL."index");
            }else{
                $result = $loginmodel->getlogin($table, $email, $pass);
                session::init();
                session::set('login',true);
                session::set('email', $result[0]['email']);
                session::set('idtk', $result[0]['idtk']);
                header("Location:".BASE_URL."");
            }
            
        }
        public function logout(){
            session_destroy();
            // unset($_SESSION['account']);
            // unset($_SESSION['mycart']);
            // session::unset($_SESSION['login']);
            header("Location:".BASE_URL."login");
        }

        
    }
?>