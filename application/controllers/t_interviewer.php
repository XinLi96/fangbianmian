<?php
defined('BASEPATH') OR exit('No direct script access allowed');
    class T_interviewer extends CI_Controller{
        public function __construct(){
            parent::__construct();
            $this->load->model('t_interviewer_model');
        }
        //学生收藏导师
        public function getInterview_by_userId(){
            $user_id=$this->session->userdata('id');
//            $user_id=1;
            $status=$this->session->userdata('status');
//            $status=0;
            if($status==0){//如果是学生才能收藏导师
                //分页
                $this->load->library('pagination');
                $config['base_url'] = 't_interviewer/getInterview_by_userId/';
                $rows=$this->t_interviewer_model->get_all_count($user_id);
                $config['total_rows'] = $rows;
                $config['per_page'] = 9;
                $config['prev_link']="《";
                $config['next_link']="》";
                $config['num_tag_open']='<li>';
                $config['num_tag_close']='</li>';
                $config['first_tag_open']='<li>';
                $config['first_tag_close']='</li>';
                $config['last_tag_open']='<li>';
                $config['last_tag_close']='</li>';
                $config['cur_tag_open']='<li class="page_selected"><a href="t_interviewer/getInterview_by_userId/" class="page_selected">';
                $config['cur_tag_close']='</a></li>';
                $config['next_tag_open']='<li>';
                $config['next_tag_close']='</li>';
                $config['prev_tag_open']='<li>';
                $config['prev_tagp ///_close']='</li>';
                $this->pagination->initialize($config);
                $offset=$this->uri->segment(3);
                $offset=!$offset?0:$offset;
                $categories=$this->t_interviewer_model->get_by_page($config['per_page'],$offset,$user_id);//获取基本信息
            
                //$rs1=$this->t_interviewer_model->get_haoping_by_userId($user_id);//获取好评数

                //$arr['rs1']=$rs1;
                $this->load->view('coll-teacher', array(
                    //'rs'=>$rs,
                    'categories'=>$categories
                )
                );
            }
            
        }
    }

?>