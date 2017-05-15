
<?php defined('BASEPATH') OR exit('No direct script access allowed');

class T_edu_model extends CI_Model
{
    public function get_edu_stu($user_id){
        $sql="select *,t_edu.degree as a_degree from t_edu,t_user where t_edu.user_id=t_user.user_id and t_user.user_id='$user_id'";
        $query=$this->db->query($sql);
        return $query->result();
    }
    public function get_edu_tea($user_id){
        $sql="select * from t_edu,t_user,t_interviewer where t_edu.user_id=t_user.user_id and t_user.user_id='$user_id' and t_user.user_id=t_interviewer.user_id";
        $query=$this->db->query($sql);
        return $query->result();
    }
    public function delete_edu($id){
        $sql="delete from t_edu where edu_id='$id'";
        $query=$this->db->query($sql);
        return $query;
    }
    public function update_edu($hid,$school,$degree,$major,$graduation){
        $sql="update t_edu set school='$school',degree='$degree',major='$major',graduation='$graduation' where edu_id='$hid'";
        $query=$this->db->query($sql);
        return $query;
    }
    public function add_edu($user_id,$school,$degree,$major,$graduation){
        $sql="insert into t_edu(edu_id,user_id,school,degree,major,graduation) values(null,'$user_id','$school','$degree','$major','$graduation');";
        $query=$this->db->query($sql);
        return $query;
    }
    public function get_by_id($user_id){
        $sql="select * from t_edu where user_id='$user_id'";
        $query=$this->db->query($sql);
        return $query->result();
    }
    public function select_max_id(){
        $sql="select max(edu_id) as max from t_edu";
        $query=$this->db->query($sql);
        return $query->row();
    }
}
?>