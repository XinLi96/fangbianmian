<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Pop_div_model extends CI_Model{
    public function get_information_stu($order_id){
        $sql="select * from t_iv_order,t_user where t_iv_order.order_id='$order_id' and t_iv_order.user_id=t_user.user_id";
        $query=$this->db->query($sql);
        return $query->result();
    }
    public function get_information_tea($order_id){
        $sql="select * from t_iv_order,t_iv_position,t_position,t_user,t_interviewer where t_iv_order.order_id='$order_id' and t_iv_order.iv_pos_id=t_iv_position.iv_pos_id and t_iv_position.pos_id=t_position.pos_id and t_iv_position.user_id=t_user.user_id and t_interviewer.user_id=t_user.user_id";
        $query=$this->db->query($sql);
        return $query->result();
    }
    public function get_order_status($order_id){
        $sql="select t_iv_order.status from t_iv_order where t_iv_order.order_id='$order_id'";
        $query=$this->db->query($sql);
        return $query->row();
    }
    public function get_info_stu($user_id){
        $sql="select * from t_user where t_user.user_id='$user_id'";
        $query=$this->db->query($sql);
        return $query->row();
    }
    public function get_work_stu($user_id){
        $sql="select * from t_work,t_user where t_user.user_id='$user_id' and t_work.user_id=t_user.user_id";
        $query=$this->db->query($sql);
        return $query->row();
    }
    public function get_edu_stu($user_id){
        $sql="select * from t_edu,t_user where t_user.user_id='$user_id' and t_edu.user_id=t_user.user_id";
        $query=$this->db->query($sql);
        return $query->row();
    }


    public function get_info_tea($user_id){
        $sql="select * from t_user,t_interviewer where t_user.user_id='$user_id' and t_user.user_id=t_interviewer.user_id";
        $query=$this->db->query($sql);
        return $query->row();
    }
    public function get_work_tea($user_id){
        $sql="select *,t_work.work as worktest from t_work,t_user,t_interviewer where t_user.user_id='$user_id' and t_work.user_id=t_user.user_id and t_user.user_id=t_interviewer.user_id";/*查询到相同的属性work，将t_work中的work属性改名成worktest*/
        $query=$this->db->query($sql);
        return $query->row();
    }
    public function get_edu_tea($user_id){
        $sql="select * from t_edu,t_user,t_interviewer where t_user.user_id='$user_id' and t_edu.user_id=t_user.user_id and t_user.user_id=t_interviewer.user_id";
        $query=$this->db->query($sql);
        return $query->row();
    }
}
