<?php
    class taikhoan extends dcontroller{
        public function dstk(){
            $this->load->quantri('header-dashboard');
            $loginmodel = $this->load->model('loginmodel');
            $taikhoan = 'taikhoan';
            $data['taikhoan']=$loginmodel->select_taikhoan($taikhoan);
            $this->load->quantri('taikhoan/taikhoan', $data);
            $this->load->quantri('footer-dashboard');
        }
        public function edit_tk($idtk){
            $this->load->quantri('header-dashboard');
            $loginmodel = $this->load->model('loginmodel');
            $taikhoan = 'taikhoan';
            $cond = "idtk='$idtk'";
            $data['taikhoan']=$loginmodel->taikhoan_byid($taikhoan, $cond);
            $this->load->quantri('taikhoan/edit_taikhoan', $data);
            $this->load->quantri('footer-dashboard');
        }
        public function delete_taikhoan($idtk){
            $loginmodel = $this->load->model('loginmodel');
            $taikhoan = 'taikhoan';
            $cond = "idtk='$idtk'";
            $result = $data['taikhoan']=$loginmodel->delete_tk($taikhoan, $cond);
            if ($result==1) {
                $message['msg'] = "Xóa thành công";
                header('Location:'.BASE_URL."taikhoan/taikhoan?msg=".urlencode(serialize($message)));
            }else{
                $message['msg'] = "Xóa Thất bại";
                header('Location:'.BASE_URL."taikhoan/taikhoan?msg=".urlencode(serialize($message)));
            }
            $this->load->quantri('taikhoan/taikhoan', $message);
        }
    }
?>