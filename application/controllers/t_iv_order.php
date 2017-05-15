<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/*马赫男开始*/
class T_iv_order extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('t_iv_order_model');
    }
    public function index()
    {
        $user_id=$this->session->userdata('id');
        $result_status=$this->t_iv_order_model->check_id($user_id);
        $user_status=$result_status->status;/*该ID的身份*/
        $status=$this->uri->segment(3);/*一个订单两个身份，所以要分开查询,判断是什么身份*/
        if($user_status==0){/*求职者*/

            $this->load->library("pagination");
            $perPage=4;
            $config['base_url']=site_url("t_iv_order/index/5/");
            $count=$this->t_iv_order_model->select_count_by_stu_all($user_id);
            $config['total_rows']=$count->count;
            $config['per_page']=$perPage;
            $config['uri_segment']=4;
            $this->pagination->initialize($config);
            $arr["links"]=$this->pagination->create_links();
            $offset=$this->uri->segment(4);/*获取偏移量*/
            $offset=!$offset?0:$offset;
            
            
            
            $teacher=$this->t_iv_order_model->select_teacher_bystudent();
            $student=$this->t_iv_order_model->select_student_bystudent($user_id,$offset,$perPage);
            $arr["teacher"]=$teacher;
            $arr["student"]=$student;
            $arr["number"]=$status;
            $this->load->view('rec_reservation_stu.php',$arr);
        }else if($user_status==1){/*面试官*/


            $this->load->library("pagination");
            $perPage=4;
            $config['base_url']=site_url("t_iv_order/index/5/");
            $count=$this->t_iv_order_model->select_count_by_tea_all($user_id);
            $config['total_rows']=$count->count;
            $config['per_page']=$perPage;
            $config['uri_segment']=4;
            $this->pagination->initialize($config);
            $arr["links"]=$this->pagination->create_links();
            $offset=$this->uri->segment(4);/*获取偏移量*/
            $offset=!$offset?0:$offset;

            $teacher=$this->t_iv_order_model->select_teacher_byteacher($user_id,$offset,$perPage);
            $student=$this->t_iv_order_model->select_student_byteacher();
            $arr["teacher"]=$teacher;
            $arr["student"]=$student;
            $arr["number"]=$status;
            $this->load->view('rec_news.php',$arr);
        }
    }
    public function select()
    {
        $user_id=$this->session->userdata('id');;
        $result_status=$this->t_iv_order_model->check_id($user_id);
        $user_status=$result_status->status;/*该ID的身份*/
        $status=$this->uri->segment(3);
        if($user_status==0) {/*求职者*/

            $this->load->library("pagination");
            $perPage=4;
            $config['base_url']=site_url("t_iv_order/select/".$status."/");
            if($status==1){
                $count=$this->t_iv_order_model->select_count_by_stu2($user_id,$status);
            }else if($status!=1){
                $count=$this->t_iv_order_model->select_count_by_stu($user_id,$status);
            }
            $config['total_rows']=$count->count;
            $config['per_page']=$perPage;
            $config['uri_segment']=4;
            $this->pagination->initialize($config);
            $arr["links"]=$this->pagination->create_links();
            $offset=$this->uri->segment(4);/*获取偏移量*/
            $offset=!$offset?0:$offset;
            
            
            $teacher=$this->t_iv_order_model->select_teacher_bystatus_student($status);
            $student=$this->t_iv_order_model->select_student_bystatus_student($status,$user_id,$offset,$perPage);
            $arr["teacher"]=$teacher;
            $arr["student"]=$student;
            $arr["number"]=$status;
            $this->load->view('rec_reservation_stu.php',$arr);
        }else if($user_status==1){/*面试官*/

            $this->load->library("pagination");
            $perPage=4;
            $config['base_url']=site_url("t_iv_order/select/".$status."/");
            if($status==1){
                $count=$this->t_iv_order_model->select_count_by_tea2($user_id,$status);
            }else if($status!=1){
                $count=$this->t_iv_order_model->select_count_by_tea($user_id,$status);
            }
            $config['total_rows']=$count->count;
            $config['per_page']=$perPage;
            $config['uri_segment']=4;
            $this->pagination->initialize($config);
            $arr["links"]=$this->pagination->create_links();
            $offset=$this->uri->segment(4);/*获取偏移量*/
            $offset=!$offset?0:$offset;
            
            
            $teacher=$this->t_iv_order_model->select_teacher_bystatus_teacher($status,$user_id,$offset,$perPage);
            $student=$this->t_iv_order_model->select_student_bystatus_teacher($status);
            $arr["teacher"]=$teacher;
            $arr["student"]=$student;
            $arr["number"]=$status;
            $this->load->view('rec_news.php',$arr);
        }
    }
    public function change_cancel(){
        $order_id=$this->input->post("order_id");
        $value=$this->input->post("value");
        $result=$this->t_iv_order_model->add_cancel($order_id,$value);
        if($result){
            echo "successful";
        }
    }
    public function change_comment(){
        $order_id=$this->input->post("order_id");
        $value=$this->input->post("value");
        $result=$this->t_iv_order_model->add_comment($order_id,$value);
        if($result){
            echo "successful";
        }
    }
    public function change_comment2(){
        $order_id=$this->input->post("order_id");
        $value=$this->input->post("value");
        $iv_result=$this->input->post("result");
        $result=$this->t_iv_order_model->add_comment2($order_id,$value);
        $result2=$this->t_iv_order_model->change_status3($order_id,$iv_result);
        if($result&&$result2){
            echo "successful";
        }
    }
    public function select_comment(){
        $order_id=$this->input->post("order_id");
        $result=$this->t_iv_order_model->select_comment($order_id);
        echo json_encode($result);
        
    }
    public function select_comment2(){
        $order_id=$this->input->post("order_id");
        $result=$this->t_iv_order_model->select_comment2($order_id);
        echo json_encode($result);

    }
    public function change_deleted(){
        $order_id=$this->input->post("order_id");
        $result=$this->t_iv_order_model->change_deleted($order_id);
        if($result){
            echo "successful";
        }

    }
    public function change_status(){
        $order_id=$this->input->post("order_id");
        $result=$this->t_iv_order_model->change_status($order_id);
        if($result){
            echo "successful";
        }

    }
    public function change_status2(){
        $order_id=$this->input->post("order_id");
        $result=$this->t_iv_order_model->change_status2($order_id);
        if($result){
            echo "successful";
        }

    }
    
}
/*马赫男结束*/