
<?php defined('BASEPATH') OR exit('No direct script access allowed');

class T_iv_pos_model extends CI_Model
{
    public function insert_all($user_id,$arr,$money){
        $sql="insert into t_iv_position(iv_pos_id,user_id,pos_id,money) values(null,'$user_id','$arr','$money');";
        /*删除了数据库中的t_iv_positon表中的外键约束*/
        $query=$this->db->query($sql);
        return $query;
    }
    public function delete($user_id){
        $sql="delete from t_iv_position where t_iv_position.user_id='$user_id'";
        $query=$this->db->query($sql);
        return $query;
    }
}
?>