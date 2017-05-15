
<?php defined('BASEPATH') OR exit('No direct script access allowed');

class T_interviewer_model extends CI_Model
{
    public function insert($user_id,$publish,$freetime,$way){
        $sql="insert into t_interviewer(user_id,publish,freetime,way) values($user_id,'$publish','$freetime','$way');";
        /*删除了数据库中的t_iv_positon表中的外键约束*/
        $query=$this->db->query($sql);
        return $query;
    }
//    public function get_all_by_userId($user_id){
//        $sql=" select t_user.nick_name,t_user.real_name,t_position.pos_name,t_interviewer.now_company,t_iv_position.money from t_user,t_c_iv,t_iv_position,t_position,t_interviewer where t_c_iv.user_id=$user_id and t_c_iv.iv_pos_id=t_iv_position.iv_pos_id and t_iv_position.user_id=t_interviewer.user_id and t_iv_position.user_id=t_user.user_id and t_iv_position.pos_id=t_position.pos_id";
//        $query=$this->db->query($sql);
//        return  $query->result();
//    }

    public function get_all_count($user_id){
        $this->db->select("*");
        $this->db->from("t_c_iv");
        $this->db->where('t_c_iv.user_id',$user_id);
        return $this->db->count_all_results() ;

    }
    public function get_by_page($limit=9,$offset=0,$user_id){

        $this->db->select("t_user.nick_name,t_user.photo,t_user.real_name,t_position.pos_name,t_interviewer.now_company,t_iv_position.money");
        $this->db->from("t_c_iv");
        $this->db->where('t_c_iv.user_id',$user_id);
        $this->db->join('t_iv_position','t_c_iv.iv_pos_id=t_iv_position.iv_pos_id');
        $this->db->join('t_interviewer','t_iv_position.user_id=t_interviewer.user_id and publish=1');
        $this->db->join('t_user','t_iv_position.user_id=t_user.user_id');
        $this->db->join('t_position','t_iv_position.pos_id=t_position.pos_id');
        $this->db->limit($limit,$offset);
        $query = $this->db->get();
        return $query->result();
    }
//    public function get_haoping_by_userId($user_id){
//       $sql="select tu.nick_name,tr.company,tr.money,tr.position,IFNULL((select count(ro.user_id) from t_rec_order ro where ro.user_id=tu.user_id and ro.st_itver_level='好' group by ro.user_id),0)
//as good_num,IFNULL((select count(ro.user_id) from t_rec_order ro where ro.user_id=tr.user_id group by ro.user_id),0) as total_num
//from t_recommend tr,t_user tu";
//        $query=$this->db->query($sql);
//        return  $query->result();
//    }
}
?>