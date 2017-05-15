
<?php defined('BASEPATH') OR exit('No direct script access allowed');

class T_work_model extends CI_Model
{
    public function get_position(){
        $sql="select * from t_position";
        $query=$this->db->query($sql);
        return $query->result();
    }
    public function get_work_stu($user_id){
        $sql="select * from t_work,t_user where t_work.user_id=t_user.user_id and t_user.user_id='$user_id'";
        $query=$this->db->query($sql);
        return $query->result();
    }
    public function get_work_tea($user_id){
        $sql="select * from t_work,t_user,t_interviewer where t_work.user_id=t_interviewer.user_id and t_user.user_id=t_interviewer.user_id and t_user.user_id='$user_id'";
        $query=$this->db->query($sql);
        return $query->result();
    }
    public function get_edu(){
        $sql="select * from t_edu";
        $query=$this->db->query($sql);
        return $query->result();
    }
    public function delete($id){
        $sql="delete from t_work where work_id='$id'";
        $query=$this->db->query($sql);
        return $query;
    }
    public function update($hid,$company,$position,$start,$end,$text){
        $sql="update t_work set company='$company',position='$position',start='$start',end='$end',work='$text' where work_id='$hid'";
        $query=$this->db->query($sql);
        return $query;
    }
    public function add($user_id,$company,$position,$start,$end,$text){
        $sql="insert into t_work(work_id,user_id,company,position,start,end,work) values(null,'$user_id','$company','$position','$start','$end','$text');";
        $query=$this->db->query($sql);
        return $query;
    }
    public function get_by_id($user_id){
        $sql="select * from t_interviewer where t_interviewer.user_id='$user_id'";
        $query=$this->db->query($sql);
        return $query->row();
    }
    public function get_work_by_id($user_id){
        $sql="select * from t_work where t_work.user_id='$user_id'";
        $query=$this->db->query($sql);
        return $query->result();
    }
    public function get_edu_by_id($user_id){
        $sql="select * from t_edu where t_edu.user_id='$user_id'";
        $query=$this->db->query($sql);
        return $query->result();
    }
    public function get_comment_by_id($user_id){
        $sql="select * from t_iv_order,t_iv_position,t_user where t_iv_order.iv_pos_id=t_iv_position.iv_pos_id and t_iv_position.user_id='$user_id' and t_iv_order.user_iv_level='0' and t_iv_order.user_id=t_user.user_id";
        $query=$this->db->query($sql);
        return $query->result();
    }
    public function select_max_id(){
        $sql="select max(work_id) as max from t_work";
        $query=$this->db->query($sql);
        return $query->row();
    }
}
?>