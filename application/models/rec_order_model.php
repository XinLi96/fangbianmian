<?php defined('BASEPATH') OR exit('No direct script access allowed');
//李昊东代码开始
class Rec_order_model extends CI_Model{
  public function get_by_order($id){
    $sql = "SELECT o.*,r.company,r.money,r.status as flag,r.position,r.user_id as ri from
 t_recommend r,t_rec_order o where r.rec_id=o.rec_id and o.user_id=$id and o.is_deleted=0 and r.is_deleted=0";
    $query = $this->db->query($sql);
    return $query->result();
  }//查t_rec_order和t_recommend两张表的数据
  public function get_by_recommend($id){
    $sql = "SELECT o.*,r.company,r.money,r.status as flag,r.position,r.user_id as ri from
 t_recommend r,t_rec_order o where r.rec_id=o.rec_id and r.user_id=$id and o.is_deleted=0 and r.is_deleted=0";
    $query = $this->db->query($sql);
    return $query->result();
  }//查t_rec_order和t_recommend两张表的数据
  public function get_by_order_name($id){
    $sql = "SELECT u.nick_name FROM t_rec_order o,t_recommend r,
t_user u WHERE o.rec_id = r.rec_id and
u.user_id = r.user_id and o.user_id = $id and o.is_deleted=0 and r.is_deleted=0";
    $query = $this->db->query($sql);
    return $query->result();
  }//三张表关联后user_id对应user表中的名字
  public function get_by_re_name($id){
    $sql = "SELECT u.nick_name FROM t_rec_order o,t_recommend r,
t_user u WHERE o.rec_id = r.rec_id and
u.user_id = o.user_id and r.user_id = $id and o.is_deleted=0 and r.is_deleted=0";
    $query = $this->db->query($sql);
    return $query->result();
  }//三张表关联后user_id对应user表中的名字
  //分类查询开始
  public function get_by_num1($num,$id){
    if($num == 3){
      $sql = "SELECT o.*,r.company,r.money,r.status as flag,r.position,r.user_id as ri from
 t_recommend r,t_rec_order o where r.rec_id=o.rec_id and o.user_id=$id
and (o.status = 3 or o.status = 4 or o.status = 5) and o.is_deleted=0 and r.is_deleted=0";
    }
    else{
      $sql = "SELECT o.*,r.company,r.money,r.status as flag,r.position,r.user_id as ri from
 t_recommend r,t_rec_order o where r.rec_id=o.rec_id and o.user_id=$id
and o.`status` = $num and o.is_deleted=0 and r.is_deleted=0";
    }
    $query = $this->db->query($sql);
    return $query->result();
  }
  public function get_by_num2($num,$id){
    if($num == 3){
      $sql = "SELECT o.*,r.company,r.money,r.status as flag,r.position,r.user_id as ri from
 t_recommend r,t_rec_order o where r.rec_id=o.rec_id and r.user_id=$id
and (o.`status`=3 or o.status = 4 or o.status = 5) and o.is_deleted=0 and r.is_deleted=0";
    }
    else{
      $sql = "SELECT o.*,r.company,r.money,r.status as flag,r.position,r.user_id as ri from
 t_recommend r,t_rec_order o where r.rec_id=o.rec_id and r.user_id=$id
and o.`status` = $num and o.is_deleted=0 and r.is_deleted=0";
    }
    $query = $this->db->query($sql);
    return $query->result();
  }
  public function get_by_num3($num,$id){
    if($num == 3){
      $sql = "SELECT u.nick_name FROM t_rec_order o,t_recommend r,
t_user u WHERE o.rec_id = r.rec_id and
u.user_id = r.user_id and o.user_id=$id and
(o.`status` = 3 or o.`status`=4 or o.`status`=5) and o.is_deleted=0 and r.is_deleted=0";
    }
    else{
      $sql = "SELECT u.nick_name FROM t_rec_order o,t_recommend r,
t_user u WHERE o.rec_id = r.rec_id and
u.user_id = r.user_id and o.user_id =$id and
o.`status` = $num and o.is_deleted=0 and r.is_deleted=0";
    }
    $query = $this->db->query($sql);
    return $query->result();
  }
  public function get_by_num4($num,$id){
    if($num == 3){
      $sql = "SELECT u.nick_name FROM t_rec_order o,t_recommend r,
t_user u WHERE o.rec_id = r.rec_id and
u.user_id = o.user_id and r.user_id =$id and
(o.`status` = 3 or o.`status`=4 or o.`status`=5) and o.is_deleted=0 and r.is_deleted=0";
    }
    else{
      $sql = "SELECT u.nick_name FROM t_rec_order o,t_recommend r,
t_user u WHERE o.rec_id = r.rec_id and
u.user_id = o.user_id and r.user_id =$id and
o.`status` = $num and o.is_deleted=0 and r.is_deleted=0";
    }
    $query = $this->db->query($sql);
    return $query->result();
  }
  public function get_my_order($id){
    $sql = "SELECT * from t_recommend r where r.user_id=$id and r.is_deleted=0 order by r.rec_id desc";
    $query = $this->db->query($sql);
    return $query->result();
  }
  public function get_order_del($id){
    $sql = "SELECT * from t_recommend r where r.user_id=$id and r.is_deleted=1 order by r.rec_id desc";
    $query = $this->db->query($sql);
    return $query->result();
  }
//  public function get_rec_del($id){
//    $sql = "SELECT * from t_rec_order where is_deleted=1 and user_id=$id";
//    $query = $this->db->query($sql);
//    return $query->result();
//  }
  //分类查询结束

  //ajax订单弹层信息开始
  public function get_rec_id_stu1($rec_id){
    $sql = "SELECT o.*,u.tel,r.post_date,r.end_date,r.company,r.status as flag,r.money,r.memo,r.position,r.user_id
as ri from t_recommend r,t_rec_order o,t_user u
where r.rec_id=o.rec_id and o.user_id=u.user_id
and o.rec_id=$rec_id";
    $query = $this->db->query($sql);
    return $query->row();
  }//订单信息
  public function get_rec_id_stu2($rec_id){
    $sql = "SELECT u.nick_name,u.tel from t_user u where u.user_id in (SELECT r.user_id
as ri from t_recommend r,t_rec_order o,t_user u
where r.rec_id=o.rec_id and o.user_id=u.user_id
and o.rec_id=$rec_id)";
    $query = $this->db->query($sql);
    return $query->row();
  }//导师姓名
  public function get_rec_id_stu3($id){
    $sql = "SELECT t_user.nick_name,t_user.tel from t_user where user_id=$id";
    $query = $this->db->query($sql);
    return $query->row();
  }//学生姓名 电话
  public function get_rec_id_stu4($rec_id){
    $sql="SELECT u.tel,u.nick_name from t_user u where u.user_id in (SELECT o.user_id
as oi from t_recommend r,t_rec_order o,t_user u
where r.rec_id=o.rec_id and o.user_id=u.user_id and o.rec_id=$rec_id)";
    $query=$this->db->query($sql);
    return $query->row();
  }//导师姓名
  public  function get_rec_id_stu5($id){
    $sql = "SELECT * from t_recommend r where r.rec_id not in(SELECT t_rec_order.rec_id from t_rec_order) and r.is_deleted=0 and r.user_id=$id";
    $query=$this->db->query($sql);
    return $query->result();
  }//查出导师发出去学生没接的内推 或者学生预约导师没接的内推
  //ajax简历弹层信息开始
  public function get_resume_user($name){
    $sql = "SELECT u.nick_name,u.sex,u.birth from t_user u where u.nick_name='$name'";
    $query = $this->db->query($sql);
    return $query->row();
  }
  public function get_resume_edu($name){
    $sql = "SELECT * from t_edu where t_edu.user_id in (SELECT u.user_id from t_user u where u.nick_name='$name')";
    $query = $this->db->query($sql);
    return $query->result();
  }
  public function get_resume_work($name){
    $sql = "SELECT w.company,w.position,w.work from t_work w where w.user_id in (SELECT u.user_id from t_user u where u.nick_name='$name')";
    $query = $this->db->query($sql);
    return $query->result();
  }
  public function get_resume_two($rec_id){
    $sql = "SELECT r.money,r.position,r.company,r.status as flag from t_recommend r where r.rec_id=$rec_id";
    $query = $this->db->query($sql);
    return $query->row();
  }//简历里的公司和钱和职位
  public function get_resume_three($id,$rec_id){
    $sql = "SELECT u.nick_name,u.sex,u.birth,e.*,w.company,w.position,
w.work from t_user u,t_work w,t_edu e where u.user_id=w.user_id and u.user_id=e.user_id and u.user_id in (SELECT r.user_id from t_recommend r,t_rec_order o where r.rec_id=o.rec_id and o.user_id=$id and r.rec_id=$rec_id)";
    $query = $this->db->query($sql);
    return $query->row();
  }//简历里面的信息 prev
  public function get_resume_four($id,$rec_id){
    $sql = "SELECT u.nick_name,u.sex,u.birth,e.*,w.company,w.position,
w.work from t_user u,t_work w,t_edu e where u.user_id=w.user_id and u.user_id=e.user_id and u.user_id in (SELECT o.user_id from t_recommend r,t_rec_order o where r.rec_id=o.rec_id and r.user_id=$id and r.rec_id=$rec_id)";
    $query = $this->db->query($sql);
    return $query->row();
  }//简历里面的信息 next
  public function update_wait($rec_id){
    $sql = "UPDATE t_recommend SET is_deleted=1 where rec_id=$rec_id";
    $this->db->query($sql);
    return $this->db->affected_rows();
  }
  public function update_order($rec_id){
    $sql = "UPDATE t_rec_order SET is_deleted=1 where rec_id=$rec_id";
    $this->db->query($sql);
    return $this->db->affected_rows();
  }
  public function save_evaluate_stu($con,$id){
    $data=array('st_itver_level'=>$con);
    $this->db->where('rec_id', $id);
    $this->db->update('t_rec_order',$data);
    return $this->db->affected_rows();
  }//评价
  public function save_evaluate_tea($con,$id){
    $data=array('st_itver'=>$con);
    $this->db->where('rec_id', $id);
    $this->db->update('t_rec_order',$data);
    return $this->db->affected_rows();
  }//评价
  public function restore($rec_id){
    $data=array('status'=>'1');
    $this->db->where('rec_id',$rec_id);
    $this->db->update('t_rec_order',$data);
    return $this->db->affected_rows();
  }//恢复按钮
  public function apply($rec_id){
    $data=array('status'=>'3');
    $this->db->where('rec_id',$rec_id);
    $this->db->update('t_rec_order',$data);
    return $this->db->affected_rows();
  }//申请取消按钮
  public function success($rec_id){
    $data=array('status'=>'2');
    $this->db->where('rec_id',$rec_id);
    $this->db->update('t_rec_order',$data);
    return $this->db->affected_rows();
  }//确认成功按钮
  public function cancel($rec_id){
    $data=array('status'=>'4');
    $this->db->where('rec_id',$rec_id);
    $this->db->update('t_rec_order',$data);
    return $this->db->affected_rows();
  }//确认取消按钮
  public function save_cause($con,$id){
    $data=array('cause'=>$con);
    $this->db->where('rec_id', $id);
    $this->db->update('t_rec_order',$data);
    return $this->db->affected_rows();
  }//存取消原因
  public function restore_rec($rec_id){
    $data=array('is_deleted'=>'0');
    $this->db->where('rec_id',$rec_id);
    $this->db->update('t_recommend',$data);
    return $this->db->affected_rows();
  }//已关闭内推的恢复
  public function restore_order($rec_id){
    $data=array('is_deleted'=>'0');
    $this->db->where('rec_id',$rec_id);
    $this->db->update('t_rec_order',$data);
    return $this->db->affected_rows();
  }//已关闭内推的恢复
}