<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/*马赫男开始*/
class t_edu extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model('t_edu_model');
    }
    public function delete_edu(){
        $id=$this->input->post("edu_id");
        $result=$this->t_edu_model->delete_edu($id);
        if($result){
            echo "successful";
        }
    }
    public function update_edu(){
        $school=$this->input->post("school");
        $degree=$this->input->post("degree");
        $major=$this->input->post("major");
        $graduation=$this->input->post("graduation");
        $hid=$this->input->post("edu_id");
        $user_id=$this->input->post("user_id");
        $this->t_edu_model->delete_edu($hid);/*使其始终将该edu_id存入本体之中方便编辑使用*/
        $result=$this->t_edu_model->add_edu($user_id,$school,$degree,$major,$graduation);
        $max_id=$this->t_edu_model->select_max_id()->max;
        if($result){
            echo $max_id;
        }
    }
    public function add_edu(){
        $user_id=$this->input->post("user_id");
        $school=$this->input->post("school2");
        $degree=$this->input->post("degree2");
        $major=$this->input->post("major2");
        $graduation=$this->input->post("graduation2");
        $result=$this->t_edu_model->add_edu($user_id,$school,$degree,$major,$graduation);
        $max_id=$this->t_edu_model->select_max_id()->max;
        if($result){
            echo $max_id;
        }
    }
}/*马赫男结束*/
?>

