<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Rec_order extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model('rec_order_model');
    }
    public function index(){
        //载入分页类
        $this->load->library('pagination');
        $perPage = 3;
        //配置
        $config['base_url']=site_url('rec_order/index');
        $config['total_rows']=8;
        $config['per_page']=$perPage;
        $config['uri_segment'] = 3;
        $this->pagination->initialize($config);
        $rs=$this->pagination->create_links();
        $num = $this->uri->segment(3);
        $this->db->limit($perPage,$num);
        $id=$this->session->userdata('id');
        $sta=$this->session->userdata('status');
        $rs1 = $this->rec_order_model->get_by_order($id);
        $rs2 = $this->rec_order_model->get_by_recommend($id);
        $name1 = $this->rec_order_model->get_by_order_name($id);
        $name2 = $this->rec_order_model->get_by_re_name($id);
        $rs3 = array_merge($rs1,$rs2);
        $rs4 = array_merge($name1,$name2);
        $rs5 = $this->rec_order_model->get_rec_id_stu5($id);
//        arsort($rs3[0]->order_date);
//        var_dump($rs3[0]->rec_id);die;
        if($sta==1){
            $data = array(
                'orders'=>$rs3,
                'names'=>$rs4,
                'teas'=>$rs5,
                'number'=>$num
            );
            $this->load->view('rec_order_tea',$data);
        }//tea
        if($sta==0){
            $data = array(
                'orders'=>$rs3,
                'names'=>$rs4,
                'stus'=>$rs5,
                'links'=>$rs,
                'number'=>$num
            );
            $this->load->view('rec_order',$data);
        }//stu
    }
    public function order_tea(){
        $rs1 = $this->rec_order_model->get_rec_id_stu5();
        echo json_encode($rs1);
    }
    public function select(){
        $sta=$this->session->userdata('status');
        $id=$this->session->userdata('id');
        $num = $this->uri->segment(3);
        $rs1 = $this->rec_order_model->get_by_num1($num,$id);
        $rs2 = $this->rec_order_model->get_by_num2($num,$id);
        $name1 = $this->rec_order_model->get_by_num3($num,$id);
        $name2 = $this->rec_order_model->get_by_num4($num,$id);
        $rs3 = array_merge($rs1,$rs2);
        $rs5 = $this->rec_order_model->get_rec_id_stu5($id);
        $rs4 = array_merge($name1,$name2);
        if($sta==1&&$num!=0){
            $data = array(
                'orders'=>$rs3,
                'names' =>$rs4,
                'teas' =>null,
                'number'=>$num
            );
            $this->load->view('rec_order_tea',$data);
        }//tea
        if($sta==1){
            $data = array(
                'orders'=>$rs3,
                'names' =>$rs4,
                'teas'=>$rs5,
                'number'=>$num
            );
            $this->load->view('rec_order_tea',$data);
        }//tea
        if($sta==0&&$num!=0){
            $data = array(
                'orders'=>$rs3,
                'names' =>$rs4,
                'stus' =>null,
                'number'=>$num
            );
            $this->load->view('rec_order',$data);
        }//stu
        if($sta==0){
            $data = array(
                'orders'=>$rs3,
                'names'=>$rs4,
                'stus'=>$rs5,
                'number'=>$num
            );
            $this->load->view('rec_order',$data);
        }//stu
    }
    public function my_order(){
        $num = $this->uri->segment(3);
        $id=$this->session->userdata('id');
        $rs = $this->rec_order_model->get_my_order($id);
        $data = array(
            'orders'=>$rs,
            'number'=>$num
        );
        $this->load->view('rec_order_my',$data);
    }
    public function my_del(){
        $num = $this->uri->segment(3);
        $id=$this->session->userdata('id');
        $rs1 = $this->rec_order_model->get_order_del($id);
        $data = array(
            'orders'=>$rs1,
            'number'=>$num
        );
        $this->load->view('rec_order_my',$data);
    }
    public function order_info(){
        $rec_id = $this->input->get('id');
        $id=$this->session->userdata('id');
        $stu1 = $this->rec_order_model->get_rec_id_stu1($rec_id);
        $stu2 = $this->rec_order_model->get_rec_id_stu2($rec_id);
        $stu3 = $this->rec_order_model->get_rec_id_stu3($id);
        $stu4 = $this->rec_order_model->get_rec_id_stu4($rec_id);
        $rs=array(
            'stu1'  =>$stu1,
            'stu2'  =>$stu2,
            'stu3'  =>$stu3,
            'stu4'  =>$stu4
        );
        echo json_encode($rs);
    }//ajax添加订单弹层数据
    public function resume_info(){
        $rec_id = $this->input->get('recId');
        $name=$this->input->get('name');
        $rs1 = $this->rec_order_model->get_resume_user($name);
        $rs2 = $this->rec_order_model->get_resume_edu($name);
        $rs3 = $this->rec_order_model->get_resume_work($name);
        $rs4 = $this->rec_order_model->get_resume_two($rec_id);

        $rs =array(
            'rs1' =>$rs1,
            'rs2' =>$rs2,
            'rs3' =>$rs3,
            'rs4' =>$rs4
        );
        echo json_encode($rs);
    }//ajax添加简历订单数据
    public function del_order_wait(){
        $rec_id = $this->input->get('id');
        $rs=$this->rec_order_model->update_wait($rec_id);
        echo $rs;
    }//删除
    public function del_order(){
        $rec_id = $this->input->get('id');
        $rs1=$this->rec_order_model->update_wait($rec_id);
        $rs2=$this->rec_order_model->update_order($rec_id);
        $rs=$rs1+$rs2;
        echo $rs;
    }//删除功能
    public function evaluate_stu(){
        $con = $this->input->get('content');
        $rec_id = $this->input->get('id');
        $rs = $this->rec_order_model->save_evaluate_stu($con,$rec_id);
        echo $rs;
    }//学生评价老师
    public function evaluate_tea(){
        $con = $this->input->get('content');
        $rec_id = $this->input->get('id');
        $rs = $this->rec_order_model->save_evaluate_tea($con,$rec_id);
        echo $rs;
    }//老师评价学生
    public function restore(){
        $rec_id = $this->input->get('id');
        $rs=$this->rec_order_model->restore($rec_id);
        echo $rs;
    }//恢复按钮
    public function my_restore(){
        $rec_id = $this->input->get('id');
        $rs1=$this->rec_order_model->restore_order($rec_id);
        $rs2 = $this->rec_order_model->restore_rec($rec_id);
        $rs=$rs1 + $rs2;
        echo $rs;
    }//已关闭内推的恢复
    public function apply(){
        $rec_id = $this->input->get('id');
        $rs=$this->rec_order_model->apply($rec_id);
        echo $rs;
    }//申请取消按钮
    public function success(){
        $rec_id = $this->input->get('id');
        $rs=$this->rec_order_model->success($rec_id);
        echo $rs;
    }//确认成功按钮
    public function cancel(){
        $con = $this->input->get('content');
        $rec_id = $this->input->get('id');
        $rs1=$this->rec_order_model->cancel($rec_id);
        $rs2 = $this->rec_order_model->save_cause($con,$rec_id);
        $rs=$rs1+$rs2;
        echo $rs;
    }//确认取消按钮
}
?>