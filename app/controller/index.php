<?php
    class index extends dcontroller{
        public function __construct()
        {
            $data = array();
            parent::__construct();
        }
        public function index(){
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
            $this->load->view('home', $data);
            $this->load->view('footer');
        }
        function addDiachi(){
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
            $this->load->view('addDiachi', $data);
            $this->load->view('footer');
        }
        public function onlineChatbot()
        {
            $conn = mysqli_connect("localhost", "root", "", "noobihome") or die("Database Error");

            // getting user message through ajax
            $getMesg = mysqli_real_escape_string($conn, $_POST['text']);

            //checking user query to database query
            $check_data = "SELECT replies FROM chatbot WHERE queries LIKE '%$getMesg%'";
            $run_query = mysqli_query($conn, $check_data) or die("Error");

            // if user query matched to database query we'll show the reply otherwise it go to else statement
            if(mysqli_num_rows($run_query) > 0){
                //fetching replay from the database according to the user query
                $fetch_data = mysqli_fetch_assoc($run_query);
                //
                $replay = $fetch_data['replies'];
                echo $replay;
            }else{
                echo "Xin lỗi, hiện chưa có câu trả lời cho câu hỏi này của bạn!";
            }
        }
    }
?>