<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/*马赫男开始*/
class search_teacher extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model('t_edu_model');
        $this->load->model('t_work_model');
        $this->load->model('user_model');
        $this->load->model('t_interviewer_model');
        $this->load->model('t_iv_pos_model');
        $this->load->model('t_iv_order_model');
    }
    public function index(){
        $this->load->library("pagination");
        $perPage=4;
        $config['base_url']=site_url("search_teacher/index");
        $count=$this->user_model->do_count();
        $config['total_rows']=$count->count;
        $config['per_page']=$perPage;
        $config['uri_segment']=3;
        $this->pagination->initialize($config);
        $arr["links"]=$this->pagination->create_links();
        $offset=$this->uri->segment(3);/*获取偏移量*/
        $offset=!$offset?0:$offset;
        $result=$this->user_model->select_teacher($offset,$perPage);
        foreach ($result as $v){
            $v->good=$this->user_model->select_good($v->user_id)->count;
            $v->people=$this->user_model->select_people($v->user_id)->count;
        }
        $result2=$this->user_model->select_position();
        $result3=$this->user_model->select_money();
        
        $arr["up"]=$result;
        $arr["up2"]=$result2;
        $arr["up3"]=$result3;
        $this->load->view("search_teacher",$arr);
    }
    public function detail(){
        $user_id_log=$this->session->userdata('id');
        if($user_id_log!=null){
            $result_status=$this->t_iv_order_model->check_id($user_id_log);
            $user_status=$result_status->status;/*该ID的身份*/
        }else if($user_id_log==null){
            $user_status=2;
        }
        $user_id=$this->uri->segment(3);
        
        $result=$this->user_model->select_all_by_id($user_id);
        $result2=$this->user_model->select_position_byuserid($user_id);
        $result3=$this->user_model->select_money_byid($user_id);
        $result4=$this->t_work_model->get_by_id($user_id);
        $result5=$this->t_work_model->get_work_by_id($user_id);
        $result6=$this->t_work_model->get_edu_by_id($user_id);
        $result7=$this->t_work_model->get_comment_by_id($user_id);
        $good=$this->user_model->select_good($user_id)->count;
        $people=$this->user_model->select_people($user_id)->count;
        $comment_good=$this->user_model->select_good($user_id)->count;
        $comment_mid=$this->user_model->select_mid($user_id)->count;
        $comment_bad=$this->user_model->select_bad($user_id)->count;
        $arr["up"]=$result;
        $arr["up2"]=$result2;
        $arr["up3"]=$result3;
        $arr["up4"]=$result4;
        $arr["up5"]=$result5;
        $arr["up6"]=$result6;
        $arr["up7"]=$result7;
        $arr["user_status"]=$user_status;
        $arr['user_id']=$user_id;
        $arr["good"]=$good;
        $arr["people"]=$people;
        $arr["comment_good"]=$comment_good;
        $arr["comment_mid"]=$comment_mid;
        $arr["comment_bad"]=$comment_bad;
        $this->load->view("iv_detail",$arr);
    }
    public function redirect(){
        $name=$this->input->post("form-name");
        $position=$this->input->post("form-position");
        $time=$this->input->post("form-time");
        $money=$this->input->post("form-money");
        $way=$this->input->post("form-way");
        $user_id=$this->input->post("form-user_id");
        $tel=$this->user_model->checked_user_id($user_id)->tel;
        $arr['name']=$name;
        $arr['position']=$position;
        $arr['time']=$time;
        $arr['money']=$money;
        $arr['way']=$way;
        $arr['tel']=$tel;
        $arr['user_id']=$user_id;
        $this->load->view("pay_info",$arr);
    }
    public function type(){
        $type=$this->input->get("type");
        $hid=$this->input->get("hid");
        $result=$this->t_iv_order_model->select_by_comment($hid,$type);
        echo json_encode($result);
    }
}/*马赫男结束*/
?>

