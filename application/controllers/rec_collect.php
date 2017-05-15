<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Rec_collect extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('collect_model');
    }
    public function index(){
        $id=$this->session->userdata('id');
        $this->load->library('pagination');
        $perPage = 3;
        //配置
        $config['base_url']=site_url('rec_collect/index');
        $config['total_rows']=$this->collect_model->get_all_count($id);
        $config['per_page']=$perPage;
        $config['uri_segment'] = 3;
        $config['prev_link']="《";
        $config['next_link']="》";
        $config['num_tag_open']='<li>';
        $config['num_tag_close']='</li>';
        $config['first_tag_open']='<li>';
        $config['first_tag_close']='</li>';
        $config['last_tag_open']='<li>';
        $config['last_tag_close']='</li>';
        $config['cur_tag_open']='<li class="page_selected"><a href="rec_collect/index/" class="page_selected">';
        $config['cur_tag_close']='</a></li>';
        $config['next_tag_open']='<li>';
        $config['next_tag_close']='</li>';
        $config['prev_tag_open']='<li>';
        $config['prev_tagp ///_close']='</li>';
        $this->pagination->initialize($config);
        $link=$this->pagination->create_links();
        $num = $this->uri->segment(3);
        $rs=$this->collect_model->get_by_page($perPage,$num,$id);
        $data=array(
            'collects'=>$rs,
            'links'=>$link
        );
        $this->load->view('coll-interpolate',$data);
    }

}