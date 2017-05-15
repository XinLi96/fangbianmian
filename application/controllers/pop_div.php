<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Pop_div extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model('pop_div_model');
    }
    public function index(){/*订单详情*/
        $order_id=$this->input->get("order_id");
        $student=$this->pop_div_model->get_information_stu($order_id);
        $teacher=$this->pop_div_model->get_information_tea($order_id);
        $order_status=$this->pop_div_model->get_order_status($order_id);
        $arr["student"]=$student;
        $arr["teacher"]=$teacher;
        $arr["order_status"]=$order_status;
        echo json_encode($arr);
    }
    public function student(){/*查看简历（导师登陆）*/
        $user_id=$this->input->get("user_id");
        $information=$this->pop_div_model->get_info_stu($user_id);
        $work=$this->pop_div_model->get_work_stu($user_id);
        $edu=$this->pop_div_model->get_edu_stu($user_id);
        $arr["information"]=$information;
        $arr["work"]=$work;
        $arr["edu"]=$edu;
        echo json_encode($arr);
    }
    public function teacher(){/*查看简历（求职者登陆）*/
        $user_id=$this->input->get("user_id");
        $information=$this->pop_div_model->get_info_tea($user_id);
        $work=$this->pop_div_model->get_work_tea($user_id);
        $edu=$this->pop_div_model->get_edu_tea($user_id);
        $arr["information"]=$information;
        $arr["work"]=$work;
        $arr["edu"]=$edu;
        echo json_encode($arr);
    }
}
?>