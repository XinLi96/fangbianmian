<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class t_work extends CI_Controller{
    /*马赫男开始*/
    public function __construct(){
        parent::__construct();
        $this->load->model('t_work_model');
        $this->load->model('t_edu_model');
        $this->load->model('t_iv_pos_model');
        $this->load->model('t_interviewer_model');
        $this->load->model('user_model');
        $this->load->model('t_iv_order_model');
    }
    public function index()
    {
        $user_id=$this->session->userdata('id');
        $result_status=$this->t_iv_order_model->check_id($user_id);
        $user_status=$result_status->status;/*该ID的身份*/
        if($user_status==0){/*求职者和待审核*/
            $result=$this->user_model->get_intro($user_id);
            $result2=$this->t_work_model->get_work_stu($user_id);
            $result3=$this->t_edu_model->get_edu_stu($user_id);
            $result4=$this->user_model->select_by_id($user_id);/*基本信息*/
            $arr["up"]=$result;
            $arr["up2"]=$result2;
            $arr["up3"]=$result3;
            $arr["up4"]=$result4;
            $this->load->view('resume1',$arr);
        }else if($user_status==1){/*面试官*/
            $result=$this->t_work_model->get_position();
            $result2=$this->t_work_model->get_work_tea($user_id);
            $result3=$this->t_edu_model->get_edu_tea($user_id);
            $result4=$this->user_model->select_by_id($user_id);/*基本信息*/
            $result5=$this->user_model->get_intro($user_id);
            $result6=$this->user_model->get_info($user_id);
            $result7=$this->user_model->get_position_byid($user_id);
            $arr["up"]=$result;
            $arr["up2"]=$result2;
            $arr["up3"]=$result3;
            $arr["up4"]=$result4;
            $arr["up5"]=$result5;
            $arr["up6"]=$result6;
            $arr["up7"]=$result7;
            $this->load->view('resume2',$arr);
        }

    }
    public function release_interview_stu(){
        $user_id=$this->session->userdata('id');/*用户的id*/
        $own=$this->input->post("own");
        $result=$this->user_model->update_intro($user_id,$own);
        if($result){
           echo "successful";
        }
    }
    public function release_interview_tea(){
        $user_id=$this->session->userdata('id');/*用户的id*/
        $own=$this->input->post("own");
        $this->user_model->update_intro($user_id,$own);
        $arr=$this->input->post("check");/*职位对应的id*/
        $money=$this->input->post("money");/*职位对应的money*/
        $this->t_iv_pos_model->delete($user_id);
        for($i=0;$i<count($arr);$i++){
            $this->t_iv_pos_model->insert_all($user_id,$arr[$i],$money[$i]);
        }
        
        $publish=$this->input->post("yes-or-on");/*是否发布面试*/
        $way=$this->input->post("way");/*面试的方式*/
        $freetime=$this->input->post("text");/*导师的空闲时间*/
        $check_result=$this->t_interviewer_model->check_id($user_id);
        if($check_result){
            $result=$this->t_interviewer_model->update($user_id,$publish,$freetime,$way);
        }else{
            $result=$this->t_interviewer_model->insert($user_id,$publish,$freetime,$way);
        }
        if($result){
            redirect("t_work/index");
        }

    }
    public function delete_work(){
        $work_id=$this->input->post("work_id");
        $result=$this->t_work_model->delete($work_id);
        if($result){
            echo "successful";
        }
    }
    public function update_work(){
        $work_id=$this->input->post("work_id");
        $user_id=$this->input->post("user_id");
        $company=$this->input->post("company");
        $position=$this->input->post("position");
        $start=$this->input->post("start");
        $end=$this->input->post("end");
        $text=$this->input->post("text");
        $this->t_work_model->delete($work_id);
        $result=$this->t_work_model->add($user_id,$company,$position,$start,$end,$text);
        $max_id=$this->t_work_model->select_max_id()->max;
        if($result){
            echo $max_id;
        }
    }
    public function add_work(){
        $user_id=$this->input->post("user_id");
        $company=$this->input->post("company3");
        $position=$this->input->post("position3");
        $start=$this->input->post("start3");
        $end=$this->input->post("end3");
        $text=$this->input->post("text3");
        $result=$this->t_work_model->add($user_id,$company,$position,$start,$end,$text);
        $max_id=$this->t_work_model->select_max_id()->max;
        if($result){
            echo $max_id;
        }
    }
    public function editor_select(){
        $user_id=$this->input->get("user_id");
        $result=$this->user_model->select_by_id($user_id);/*基本信息*/
        echo json_encode($result);
    }
    public function editor_update(){
        $user_id=$this->input->post("user_id");
        $real_name=$this->input->post("real_name");
        $nick_name=$this->input->post("nick_name");
        $sex=$this->input->post("sex");
        $time=$this->input->post("birth");
        $degree=$this->input->post("degree");
        $email=$this->input->post("email");

//         $this->load->library('upload');
//        if (!empty($_FILES['update_photo']['name']))
//                {
//                    $config['upload_path'] = './uploads/photo';
//                    $config['allowed_types'] = '*';
//                    $config['max_size'] = '10000';
//                    $config['file_name'] = time() . mt_rand(1000,9999);
//                    //载入上传类
//                     $this->upload->initialize($config);
//                if ($this->upload->do_upload('update_photo'))
//                    {
//                        $info1 = $this->upload->data();
//                        $path1 =  strstr($info1['full_path'],"uploads");
//                        // echo "<pre>";
//                        // var_dump($info1);
//                        // echo "</pre></hr>";
//                    }
//                    else
//                    {
//                        echo $this->upload->display_errors();
//                    }
//         
//                }else{
//                    $path1='';
//                }

        $result=$this->user_model->update_by_id($user_id,$real_name,$nick_name,$sex,$time,$degree,$email);/*基本信息*/
        if($result){
            echo "successful";
        }else{
            echo "编辑信息失败";
        }

    }
    public function name_flag(){
        $user_id=$this->input->get("user_id");
        $name_flag=$this->input->get("name_flag");
        $result=$this->user_model->update_flag_by_id($user_id,$name_flag);/*更新名字是否真实*/
        if($result){
            echo "successful";
        }
    }
    /*马赫男结束*/
}
?>

