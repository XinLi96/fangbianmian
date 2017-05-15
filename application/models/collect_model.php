
<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Collect_model extends CI_Model
{
  public function get_all_count($id){
   $this->db->select("*");
   $this->db->from("t_c_rec");
   $this->db->where('t_c_rec.user_id',$id);
   return $this->db->count_all_results();
  }
 public function get_by_page($limit=3,$offset=0,$user_id){

  $this->db->select("r.money,r.company,r.position,e.degree,e.major");
  $this->db->from("t_c_rec c");
  $this->db->where('c.user_id',$user_id);
  $this->db->join('t_edu e','e.user_id=c.user_id');
  $this->db->join('t_recommend r','r.rec_id=c.rec_id and r.is_deleted=0');
  $this->db->order_by('r.post_date','desc');
  $this->db->limit($limit,$offset);
  $query = $this->db->get();
  return $query->result();
 }
}