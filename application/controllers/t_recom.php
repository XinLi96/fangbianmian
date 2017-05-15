<?php defined('BASEPATH') OR exit('No direct script access allowed');
    class T_recom extends CI_Controller{
        public function __construct()
        {
            parent::__construct();
            $this->load->model("t_recom_model");
            $this->load->library('pagination');
        }
        public function index(){
            $status=$this->session->userdata('status');
            $total_rows = $this->t_recom_model->get_total_rows();
            $total_rows = (int)$total_rows->total;
            //分页开始
            $config['base_url'] = 't_recom/';
            $config['total_rows'] = $total_rows;
            $config['per_page'] = 12;
            $this->pagination->initialize($config);

            $offset = $this->uri->segment(2);
            if($offset=='index'){
                $offset = 0;
            }
            $offset = !$offset?0:$offset;

            //分页结束
            if($status==0){//求职者进入的内推薄
//                $result = $this->t_recom_model->get_all();
                $result = $this->t_recom_model->get_by_page(16,$offset);
                $arr['result'] = $result;
                $arr['keychar'] = 000;
                $this->load->view("rec_star",$arr);
            }else{//导师和待审核导师进入的求内推薄
//                $result = $this->t_recom_model->get_all();
                $result = $this->t_recom_model->get_by_page(12,$offset);
                $arr['result'] = $result;
                $this->load->view("rec_list",$arr);
            }
        }
        public function qnt(){
            $status=$this->session->userdata('status');
            if($status==0){
                $this->load->view("send");
            }else if($status==2){
                $this->load->view("send");
            }else{
                echo "暂无此权限。稍后再试！";
                echo "<a href='index'>点此返回上一层<a/>";
            }

        }
        public function add_recom(){
            $company = $this->input->post('nt_company');
            $position = $this->input->post('nt_position');
            $money = $this->input->post('nt_salary');
            $endtime = $this->input->post('nt_endtime');

//            echo $endtime,$money,$position,$company;
//            die();
            $result=$this->t_recom_model->add_in($company,$position,$money,$endtime);
            if($result){
                $this->index();
            }else{
                echo '发布失败！！！';
            }
        }
        public function search_keychar(){
            $keychar = $this->input->post('keychar');
            $result = $this->t_recom_model->search_mohu($keychar);
//            $result->keychar = $keychar;
            $arr['keychar'] = $keychar;
            $arr['result'] = $result;
            $status=$this->session->userdata('status');
            if($status==0){
                $this->load->view("rec_star",$arr);
            }else{
                $this->load->view("rec_list",$arr);
            }
        }
        public function get_details_by_id(){
            $rec_id = $_GET['rec_id'];
            $result = $this->t_recom_model->get_by_id($rec_id);
            $arr['result'] = $result;
//            var_dump($result);
//            die();
            $this->load->view('neitui.php',$arr);
        }
        public function collect(){
            $rec_id = $this->input->get('rec_id');
            $user_id = $this->session->userdata('id');
//            var_dump($rec_id,$user_id);
//            die();
            $this->load->model('t_c_rec_model');
            $result = $this->t_c_rec_model->do_collect($rec_id,$user_id);
            if($result){
                $this->load->view('index');
            }
        }
    }
?>