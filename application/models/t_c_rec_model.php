<?php defined('BASEPATH') OR exit('No direct script access allowed');

class T_c_rec_model extends CI_Model
{
    public function do_collect($user_id,$rec_id){
        $sql = 'insert into t_c_rec (user_id,rec_id) values ('.$user_id.','.$rec_id.')';
        $query = $this->db->query($sql);
        return $query;
    }
}
?>