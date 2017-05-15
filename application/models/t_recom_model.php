<?php defined('BASEPATH') OR exit('No direct script access allowed');
    class T_recom_model extends CI_Model{
        public function get_all(){
            $status=$this->session->userdata('status');
            if($status==0){
                $sql  = "SELECT u.nick_name,tr.company,tr.money,tr.position, IFNULL((select count(ro.user_id) from t_rec_order ro where ro.user_id=u.user_id and ro.st_itver_level='好' group by ro.user_id),0)
  as good_num,IFNULL((select count(ro.user_id) from t_rec_order ro where ro.user_id=u.user_id group by ro.user_id),0) as total_num
  from t_user u,t_recommend tr
  where u.user_id=tr.user_id and tr.status=0 and tr.is_deleted=0 limit 0,16";  //内推薄
            }else{
                $sql  = "select * from t_recommend tr,t_user tu,t_interviewer ti where tr.user_id = tu.user_id  and tr.user_id = ti.user_id and tr.status=1  and tr.is_deleted=0 limit 0,12";    //求内推薄
            }
//            $sql  = "select *  from t_recommend tr,t_user tu,t_interviewer ti where tr.user_id = tu.user_id  and tr.user_id = ti.user_id and tr.status=1 limit 0,12";    //求内推薄
            $query = $this->db->query($sql);
            return $query->result();
        }
        public function add_in($company,$position,$money,$endtime){
            $sql = "insert into t_recommend(company,position,money,end_date) VALUES ('$company','$position','$money','$endtime')";
            $query = $this->db->query($sql);
            return $query;
        }
        public function count_well(){

        }
        public function search_mohu($keychar){
            $status=$this->session->userdata('status');
            if($status==0){
                $sql = "select tu.nick_name,tr.,tr.company,tr.money,tr.position,IFNULL((select count(ro.user_id) from t_rec_order ro where ro.user_id=tu.user_id and ro.st_itver_level='好' group by ro.user_id),0)
as good_num,IFNULL((select count(ro.user_id) from t_rec_order ro where ro.user_id=tr.user_id group by ro.user_id),0) as total_num
from t_recommend tr,t_user tu
where ((tr.company like '%$keychar%') or tu.nick_name like '%$keychar%')  and tr.user_id = tu.user_id and tr.status=0 and tr.is_deleted=0";//内推薄的模糊搜索
            }else{
                $sql = "select * from t_recommend tr where tr.company like '%$keychar%' and tr.status=1 and tr.is_deleted=0";//求内推薄上的模糊搜索
            }
            $query = $this->db->query($sql);

            return $query->result();
        }
        public function get_total_rows(){
            $status=$this->session->userdata('status');
            if($status==0){
                $sql = "select count(*) as total from t_recommend tr where tr.status=0";
                $query = $this->db->query($sql);
                return $query->row();
            }else{
                $sql = "select count(*) as total from t_recommend tr where tr.status=1";
                $query = $this->db->query($sql);
                return $query->row();
            }

        }
        public function get_by_page($limit,$offset=0){//分页函数
            $status=$this->session->userdata('status');
            if($status==0){
                $sql  = "SELECT tr.rec_id,u.nick_name,tr.company,tr.money,tr.position, IFNULL((select count(ro.user_id) from t_rec_order ro where ro.user_id=u.user_id and ro.st_itver_level='好' group by ro.user_id),0)
  as good_num,IFNULL((select count(ro.user_id) from t_rec_order ro where ro.user_id=u.user_id group by ro.user_id),0) as total_num
  from t_user u,t_recommend tr
  where u.user_id=tr.user_id and tr.status=0 and tr.is_deleted=0 limit $offset,$limit";  //内推薄
                $query = $this->db->query($sql);
                return $query->result();
            }else{
                $this->db->select('*');
                $this->db->from('t_recommend tr,t_user tu,t_interviewer ti');
                $this->db->where('tr.user_id = tu.user_id  and tr.user_id = ti.user_id and tr.status=1 and tr.is_deleted=0');
                $this->db->limit($limit,$offset);
                return $this->db->get()->result();
            }

        }
        public function get_by_id($rec_id){
//            $this->db->select('*');
//            $this->db->from('t_recommend tr');
//            $this->db->where('tr.rec_id = '.$rec_id.'');
            $sql = 'SELECT u.nick_name,tr.company,tr.money,tr.position,tr.memo,tr.rec_id,
                    IFNULL((select count(ro.user_id) from t_rec_order ro where ro.user_id=u.user_id and ro.st_itver_level=\'好\' group by ro.user_id),0)
                    as good_num,
                    IFNULL((select count(ro.user_id) from t_rec_order ro where ro.user_id=u.user_id group by ro.user_id),0) 
                    as total_num
                    from t_user u,t_recommend tr
                    where tr.rec_id='.$rec_id.' and u.user_id=tr.user_id';
            $query = $this->db->query($sql);
            return $query->row();
        }
    }
?>