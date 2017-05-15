
<?php defined('BASEPATH') OR exit('No direct script access allowed');

class T_iv_order_model extends CI_Model
{
    public function select_teacher_byteacher($user_id,$offset,$perPage){/*teacher循环订单的基本信息*/
        $sql="select * from t_iv_order,t_iv_position,t_position,t_interviewer,t_user where t_iv_order.iv_pos_id=t_iv_position.iv_pos_id and t_iv_position.pos_id=t_position.pos_id and t_iv_position.user_id=t_interviewer.user_id and t_interviewer.user_id=t_user.user_id and t_interviewer.user_id='$user_id' and t_iv_order.is_deleted=0 limit $offset,$perPage";
        $query=$this->db->query($sql);
        return $query->result();
    }
    public function select_student_byteacher(){/*student循环订单的状态*/
        $sql="select t_iv_order.status,t_user.real_name,t_iv_order.order_id,t_user.user_id,t_user.name_flag,t_user.nick_name,t_user.photo from t_iv_order,t_user where t_iv_order.user_id=t_user.user_id;";
        $query=$this->db->query($sql);
        return $query->result();
    }

    public function select_teacher_bystudent(){/*teacher循环订单的状态*/
        $sql="select t_iv_order.order_no,t_iv_order.status,t_iv_order.finish_date,t_iv_order.order_date,t_position.pos_name,t_interviewer.way,t_iv_position.money,t_iv_order.order_id,t_user.user_id,t_user.real_name,t_user.name_flag,t_user.nick_name,t_user.photo from t_iv_order,t_iv_position,t_position,t_interviewer,t_user where t_iv_order.iv_pos_id=t_iv_position.iv_pos_id and t_iv_position.pos_id=t_position.pos_id and t_iv_position.user_id=t_interviewer.user_id and t_interviewer.user_id=t_user.user_id";
        $query=$this->db->query($sql);
        return $query->result();
    }
    public function select_student_bystudent($user_id,$offset,$perPage){
        $sql="select * from t_iv_order,t_user where t_iv_order.user_id=t_user.user_id and t_user.user_id='$user_id' and t_iv_order.is_deleted=0 and t_iv_order.is_deleted=0 limit $offset,$perPage";
        $query=$this->db->query($sql);
        return $query->result();
    }



    public function select_teacher_bystatus_teacher($status,$user_id,$offset,$perPage){
        if($status==1){
            $sql="select * from t_iv_order,t_iv_position,t_position,t_interviewer,t_user where t_iv_order.iv_pos_id=t_iv_position.iv_pos_id and t_iv_position.pos_id=t_position.pos_id and t_iv_position.user_id=t_interviewer.user_id and t_interviewer.user_id=t_user.user_id and (t_iv_order.status='$status' or t_iv_order.status='3') and t_interviewer.user_id='$user_id'  and t_iv_order.is_deleted=0 limit $offset,$perPage";
        }if($status==6){
            $sql="select * from t_iv_order,t_iv_position,t_position,t_interviewer,t_user where t_iv_order.iv_pos_id=t_iv_position.iv_pos_id and t_iv_position.pos_id=t_position.pos_id and t_iv_position.user_id=t_interviewer.user_id and t_interviewer.user_id=t_user.user_id and t_iv_order.status='0' and t_interviewer.user_id='$user_id'  and t_iv_order.is_deleted=0 limit $offset,$perPage";
        }else if($status!=1&&$status!=6){
            $sql="select * from t_iv_order,t_iv_position,t_position,t_interviewer,t_user where t_iv_order.iv_pos_id=t_iv_position.iv_pos_id and t_iv_position.pos_id=t_position.pos_id and t_iv_position.user_id=t_interviewer.user_id and t_interviewer.user_id=t_user.user_id and t_iv_order.status='$status' and t_interviewer.user_id='$user_id'  and t_iv_order.is_deleted=0 limit $offset,$perPage";
        }
        $query=$this->db->query($sql);
        return $query->result();
    }
    public function select_student_bystatus_teacher($status){/**/
        if($status==1){
            $sql="select t_iv_order.status,t_user.real_name,t_iv_order.order_id,t_user.user_id,t_user.name_flag,t_user.nick_name,t_user.photo from t_iv_order,t_user where t_iv_order.user_id=t_user.user_id and (t_iv_order.status='$status' or t_iv_order.status='3')";
        }if($status==6){
            $sql="select t_iv_order.status,t_user.real_name,t_iv_order.order_id,t_user.user_id,t_user.name_flag,t_user.nick_name,t_user.photo from t_iv_order,t_user where t_iv_order.user_id=t_user.user_id and t_iv_order.status='0'";
        }else if($status!=1&&$status!=6){
            $sql="select t_iv_order.status,t_user.real_name,t_iv_order.order_id,t_user.user_id,t_user.name_flag,t_user.nick_name,t_user.photo from t_iv_order,t_user where t_iv_order.user_id=t_user.user_id and t_iv_order.status='$status'";
        }
        $query=$this->db->query($sql);
        return $query->result();
    }

    public function select_teacher_bystatus_student($status){
        if($status==1){
            $sql="select t_iv_order.order_no,t_iv_order.status,t_iv_order.finish_date,t_iv_order.order_date,t_position.pos_name,t_interviewer.way,t_iv_position.money,t_iv_order.order_id,t_user.user_id,t_user.real_name,t_user.name_flag,t_user.nick_name,t_user.photo from t_iv_order,t_iv_position,t_position,t_interviewer,t_user where t_iv_order.iv_pos_id=t_iv_position.iv_pos_id and t_iv_position.pos_id=t_position.pos_id and t_iv_position.user_id=t_interviewer.user_id and t_interviewer.user_id=t_user.user_id and (t_iv_order.status='$status' or t_iv_order.status='3')";
        }if($status==6){
            $sql="select t_iv_order.order_no,t_iv_order.status,t_iv_order.finish_date,t_iv_order.order_date,t_position.pos_name,t_interviewer.way,t_iv_position.money,t_iv_order.order_id,t_user.user_id,t_user.real_name,t_user.name_flag,t_user.nick_name,t_user.photo from t_iv_order,t_iv_position,t_position,t_interviewer,t_user where t_iv_order.iv_pos_id=t_iv_position.iv_pos_id and t_iv_position.pos_id=t_position.pos_id and t_iv_position.user_id=t_interviewer.user_id and t_interviewer.user_id=t_user.user_id and t_iv_order.status='0'";
        }else if($status!=1&&$status!=6){
            $sql="select t_iv_order.order_no,t_iv_order.status,t_iv_order.finish_date,t_iv_order.order_date,t_position.pos_name,t_interviewer.way,t_iv_position.money,t_iv_order.order_id,t_user.user_id,t_user.real_name,t_user.name_flag,t_user.nick_name,t_user.photo from t_iv_order,t_iv_position,t_position,t_interviewer,t_user where t_iv_order.iv_pos_id=t_iv_position.iv_pos_id and t_iv_position.pos_id=t_position.pos_id and t_iv_position.user_id=t_interviewer.user_id and t_interviewer.user_id=t_user.user_id and t_iv_order.status='$status'";
        }
        $query=$this->db->query($sql);
        return $query->result();
    }
    public function select_student_bystatus_student($status,$user_id,$offset,$perPage){
        if($status==1){
            $sql="select * from t_iv_order,t_user where t_iv_order.user_id=t_user.user_id and (t_iv_order.status='$status' or t_iv_order.status='3') and t_user.user_id='$user_id' limit $offset,$perPage";
        }if($status==6){
            $sql="select * from t_iv_order,t_user where t_iv_order.user_id=t_user.user_id and t_iv_order.status='0' and t_user.user_id='$user_id'  limit $offset,$perPage";
        }else if($status!=1&&$status!=6){
            $sql="select * from t_iv_order,t_user where t_iv_order.user_id=t_user.user_id and t_iv_order.status='$status' and t_user.user_id='$user_id'  limit $offset,$perPage";
        }
        $query=$this->db->query($sql);
        return $query->result();
    }
    
    public function check_id($user_id){
        $sql="select t_user.status from t_user where t_user.user_id='$user_id'";
        $query=$this->db->query($sql);
        return $query->row();
    }
    public function select_by_comment($hid,$type){
        $sql="select * from t_iv_order,t_iv_position,t_user where t_iv_order.iv_pos_id=t_iv_position.iv_pos_id and t_iv_position.user_id='$hid' and t_iv_order.user_iv_level='$type' and t_iv_order.user_id=t_user.user_id";
        $query=$this->db->query($sql);
        return $query->result();
    }





    public function add_cancel($order_id,$value){
        $sql="update t_iv_order set cancel_cause='$value',status='3' where t_iv_order.order_id='$order_id'";
        $query=$this->db->query($sql);
        return $query;
    }
    public function add_comment($order_id,$value){
        $sql="update t_iv_order set user_iv_evaluate='$value' where t_iv_order.order_id='$order_id'";
        $query=$this->db->query($sql);
        return $query;
    }
    public function add_comment2($order_id,$value){
        $sql="update t_iv_order set iv_user_evaluate='$value' where t_iv_order.order_id='$order_id'";
        $query=$this->db->query($sql);
        return $query;
    }
    public function select_comment($order_id){
        $sql="select iv_user_evaluate from t_iv_order where t_iv_order.order_id='$order_id'";
        $query=$this->db->query($sql);
        return $query->row();
    }
    public function select_comment2($order_id){
        $sql="select user_iv_evaluate from t_iv_order where t_iv_order.order_id='$order_id'";
        $query=$this->db->query($sql);
        return $query->row();
    }
    public function change_deleted($order_id){
        $sql="update t_iv_order set is_deleted='1' where t_iv_order.order_id='$order_id'";
        $query=$this->db->query($sql);
        return $query;
    }
    public function change_status($order_id){
        $sql="update t_iv_order set status='1' where t_iv_order.order_id='$order_id'";
        $query=$this->db->query($sql);
        return $query;
    }
    public function change_status2($order_id){
        $sql="update t_iv_order set status='4' where t_iv_order.order_id='$order_id'";
        $query=$this->db->query($sql);
        return $query;
    }
    public function change_status3($order_id,$iv_result){
        $sql="update t_iv_order set status='2',result='$iv_result' where t_iv_order.order_id='$order_id'";
        $query=$this->db->query($sql);
        return $query;
    }

    public function select_count_by_stu_all($user_id){
        $sql="select count(order_id) as count from t_iv_order where user_id=$user_id and t_iv_order.is_deleted=0";
        $query=$this->db->query($sql);
        return $query->row();
    }
    public function select_count_by_tea_all($user_id){
        $sql="select count(order_id) as count from t_iv_order,t_iv_position where t_iv_order.iv_pos_id=t_iv_position.iv_pos_id and t_iv_position.user_id=$user_id and t_iv_order.is_deleted=0";
        $query=$this->db->query($sql);
        return $query->row();
    }
    public function select_count_by_stu($user_id,$status){
        $sql="select count(order_id) as count from t_iv_order where user_id=$user_id and status=$status and t_iv_order.is_deleted=0";
        $query=$this->db->query($sql);
        return $query->row();
    }
    public function select_count_by_stu2($user_id,$status){
        $sql="select count(order_id) as count from t_iv_order where user_id=$user_id and (status=$status or status=3) and t_iv_order.is_deleted=0";
        $query=$this->db->query($sql);
        return $query->row();
    }
    public function select_count_by_tea($user_id,$status){
        $sql="select count(order_id) as count from t_iv_order,t_iv_position where t_iv_order.iv_pos_id=t_iv_position.iv_pos_id and t_iv_position.user_id=$user_id and t_iv_order.status=$status and t_iv_order.is_deleted=0";
        $query=$this->db->query($sql);
        return $query->row();
    }
    public function select_count_by_tea2($user_id,$status){
        $sql="select count(order_id) as count from t_iv_order,t_iv_position where t_iv_order.iv_pos_id=t_iv_position.iv_pos_id and t_iv_position.user_id=$user_id and (t_iv_order.status=$status or t_iv_order.status=3) and t_iv_order.is_deleted=0";
        $query=$this->db->query($sql);
        return $query->row();
    }

}
?>