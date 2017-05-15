
<?php defined('BASEPATH') OR exit('No direct script access allowed');

    class User_model extends CI_Model{
// Zhengruyu开始
        public function reg_check($tel){
            $data=array(
                'tel'=>$tel,
            );
            $query=$this->db->get_where('t_user',$data);
            return $query->row();
        }
         public function reg_insert($tel,$pass,$status,$state){
            $data=array(
                'tel'=>$tel,
                'password'=>$pass,
                'status'=>$status,
                'state'=>$state
            );
            $this->db->insert('t_user',$data);
            $query=$this->db->insert_id();
            return $query;
        }

        public function insert_user($id,$nname,$rname,$status,$sex,$birth,$email,$degree,$photo,$state){
            $data1=array(
                'nick_name'=>$nname,
                'real_name'=>$rname,
                'name_flag'=>$status,
                'sex'=>$sex,
                'birth'=>$birth,
                'email'=>$email,
                'degree'=>$degree,
                'photo'=>$photo,
                'state'=>$state,
            );
            $this->db->where('user_id',$id);
            $query=$this->db->update('t_user',$data1);
            return $query;

        }
         public function insert_iv($id,$company,$position,$work,$proof){
              $data=array(
                'user_id'=>$id,
                'now_company'=>$company,
                'now_duty'=>$position,
                'work'=>$work,
                'proof'=>$proof,
            );
            $query=$this->db->insert('t_interviewer',$data);
            return $query;
        }
         public function insert_company($company){
              $data=array(
                
                'company'=>$company,
                
            );
            $query=$this->db->insert('t_company',$data);
            return $query;
        }

         public function insert_user_iv($id,$status,$state){
            $data1=array(
                'state'=>$state,
                'status'=>$status,
            );
            $this->db->where('user_id',$id);
            $query=$this->db->update('t_user',$data1);
            return $query;

        }

          public function get_name_by_pass($tel,$pass){
            $data=array(
                'tel'=>$tel,
                'password'=>$pass,
            );
            $query=$this->db->get_where('t_user',$data);
            return $query->row();
        }
        public function select_company($company){
            $sql = "SELECT * FROM t_company WHERE company LIKE '%".$this->db->escape_like_str($company)."%'";
            $query=$this->db->query($sql);
            return $query->result();
        }
        public function select_company_by_name($company){
            $data=array(
                'company'=>$company,
            );
            $query=$this->db->get_where('t_company',$data);
            return $query->row();
        }



// Zhengruyu结束




/*马赫男开始*/

        public function select_by_id($user_id){
            $sql="select * from t_user where t_user.user_id='$user_id'";
            $query=$this->db->query($sql);
            return $query->row();
        }
        public function update_by_id($user_id,$real_name,$nick_name,$sex,$time,$degree,$email){
//           if ($path) {
//                $sql="update t_user set real_name='$real_name',nick_name='$nick_name',sex='$sex',birth='$time',degree='$degree',email='$email',photo='$path' where t_user.user_id='$user_id'";
//           }else{
//                
//           }
            $sql="update t_user set real_name='$real_name',nick_name='$nick_name',sex='$sex',birth='$time',degree='$degree',email='$email' where t_user.user_id='$user_id'";
            $query=$this->db->query($sql);
            return $query;
        }
        public function select_all_by_id($user_id){
            $sql="select * from t_user,t_interviewer where t_user.user_id=t_interviewer.user_id and t_user.user_id='$user_id'";
            $query=$this->db->query($sql);
            return $query->row();
        }
        public function select_position_byuserid($user_id){
            $sql="select t_position.pos_name,t_iv_position.iv_pos_id,t_iv_position.money from t_user,t_iv_position,t_position where t_user.user_id=t_iv_position.user_id and t_iv_position.pos_id=t_position.pos_id and t_user.user_id='$user_id'";
            $query=$this->db->query($sql);
            return $query->result();
        }
    
        public function select_teacher($offset,$perPage){
            $sql="select * from t_user,t_interviewer where t_user.user_id=t_interviewer.user_id and t_interviewer.publish=1 limit $offset,$perPage";
            $query=$this->db->query($sql);
            return $query->result();/*查找到的都是导师，不包括求职者*/
        }
    
        public function select_position(){
            $sql="select t_user.user_id,t_position.pos_name from t_user,t_iv_position,t_position where t_user.user_id=t_iv_position.user_id and t_iv_position.pos_id=t_position.pos_id;";
            $query=$this->db->query($sql);
            return $query->result();
        }
        public function select_money(){
            $sql="select t_user.user_id,t_iv_position.money from t_user,t_iv_position where t_user.user_id=t_iv_position.user_id;";
            $query=$this->db->query($sql);
            return $query->result();
        }
        public function select_money_byid($user_id){
            $sql="select t_iv_position.money from t_user,t_iv_position where t_user.user_id=t_iv_position.user_id and t_user.user_id='$user_id';";
            $query=$this->db->query($sql);
            return $query->result();
        }
        public function update_intro($user_id,$intro){
            $sql="update t_user set introduction='$intro' where t_user.user_id='$user_id'";
            $query=$this->db->query($sql);
            return $query;
        }
        public function get_intro($user_id){
            $sql="select * from t_user where t_user.user_id='$user_id'";
            $query=$this->db->query($sql);
            return $query->row();
        }
        public function get_info($user_id){
            $sql="select * from t_interviewer where t_interviewer.user_id='$user_id'";
            $query=$this->db->query($sql);
            return $query->row();
        }
        public function get_position_byid($user_id){
            $sql="select pos_id,money from t_iv_position where t_iv_position.user_id='$user_id'";
            $query=$this->db->query($sql);
            return $query->result();
        }
        public function update_flag_by_id($user_id,$name_flag){
            $sql="update t_user set name_flag='$name_flag' where t_user.user_id='$user_id'";
            $query=$this->db->query($sql);
            return $query;
        }
        public function do_count(){
            $sql="select count(user_id) as count from t_interviewer where publish=1";
            $query=$this->db->query($sql);
            return $query->row();
        }
        public function checked_user_id($user_id){
            $sql="select tel from t_user where user_id='$user_id'";
            $query=$this->db->query($sql);
            return $query->row();
        }
        public function select_good($user_id){
            $sql="select count(order_id) as count from t_iv_order,t_iv_position where t_iv_order.iv_pos_id=t_iv_position.iv_pos_id and t_iv_position.user_id='$user_id' and t_iv_order.user_iv_level=0;";
            $query=$this->db->query($sql);
            return $query->row();
        }
        public function select_mid($user_id){
            $sql="select count(order_id) as count from t_iv_order,t_iv_position where t_iv_order.iv_pos_id=t_iv_position.iv_pos_id and t_iv_position.user_id='$user_id' and t_iv_order.user_iv_level=1;";
            $query=$this->db->query($sql);
            return $query->row();
        }
        public function select_bad($user_id){
            $sql="select count(order_id) as count from t_iv_order,t_iv_position where t_iv_order.iv_pos_id=t_iv_position.iv_pos_id and t_iv_position.user_id='$user_id' and t_iv_order.user_iv_level=2;";
            $query=$this->db->query($sql);
            return $query->row();
        }
        public function select_people($user_id){
            $sql="select count(t_iv_order.order_id) as count from t_iv_order,t_iv_position where t_iv_order.iv_pos_id=t_iv_position.iv_pos_id and t_iv_position.user_id='$user_id'";
            $query=$this->db->query($sql);
            return $query->row();
        }
/*马赫男结束*/



        // public function insert($tel,$pass,$status){
        //     // $sql="insert into user(userid,name,pass) values(null,'$name','$pass')";
        //     // $query=$this->db->query($sql);
        //     // return  $query;
        //     $data=array(
        //         'tel'=>$tel,
        //         'password'=>$pass,
        //         'status'=>$status
        //     );

        //     $query=$this->db->insert('t_user',$data);
        //     return $query;
        // }

      

    }
