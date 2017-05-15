<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	class User extends CI_Controller{
        public function __construct(){
            parent::__construct();
            $this->load->helper(array('form', 'url'));
           // $this->load->model('user_model');
        }
        //郑茹玉开始

        public function index(){//默认调用函数
            $this->load->view('index');
        }

        public function reg(){//加载注册页面
            $this->load->view('register.php');
        }


        public function reg_check(){//注册页面验证手机号是否存在ajax
            $this->load->model('user_model');

            $tel=$this->input->post('tel');
            $result=$this->user_model->reg_check($tel);
            if($result){
               echo "have";
           }else{
               echo "none";
           }
        }



        public function do_reg(){//注册
            $this->load->model('user_model');

            $this->output->enable_profiler(TRUE);

            $tel=$this->input->post('tel');
            $pass=$this->input->post('pass');
            $status=$this->input->get('status');
            $state=0;

            $result=$this->user_model->reg_insert($tel,$pass,$status,$state);

            if ($result) {
                    $arr['id']=$result;                  
                    $arr['status']=$status;  
                    // $arr['tel']=$tel;  
                    $this->session->set_userdata($arr);

               if ($status == 0) {                
                   $this->load->view('st_register');
                }
               if ($status == 1) {
                   $this->load->view('iv_register');
               }
            }else{
                echo "注册失败";
            }
           
        
        }

        public function iv_reg(){//导师注册页面
            $this->load->model('user_model');
            $this->output->enable_profiler(TRUE);
            $id=$this->session->userdata('id');
            $nname=$this->input->post('nname');
            $rname=$this->input->post('name');
            $status=$this->input->post('status');//name_flag
            $sex=$this->input->post('sex');
            $birth=$this->input->post('birth');
            $email=$this->input->post('email');
            $degree=$this->input->post('degree');
            $state=2;
            $company=$this->input->post('company');
            $company2=$this->input->post('company2');
            $position=$this->input->post('position');
            $work=$this->input->post('text');
            $this->load->library('upload');
            if ($company2) {
                $company = $company2;
            }
          
          if (!empty($_FILES['photo']['name']))
                {
                    $config['upload_path'] = './uploads/photo';
                    $config['allowed_types'] = '*';
                    $config['max_size'] = '10000';
                    $config['file_name'] = time() . mt_rand(1000,9999);
                    //载入上传类
                     $this->upload->initialize($config);
                if ($this->upload->do_upload('photo'))
                    {
                        $info1 = $this->upload->data();
                        $path1 =  strstr($info1['full_path'],"uploads");
                        // echo "<pre>";
                        // var_dump($info1);
                        // echo "</pre></hr>";
                    }
                    else
                    {
                        echo $this->upload->display_errors();
                    }
         
                }else{
                    $path1='uploads/photo/moren.jpg';
                }
                   
          if (!empty($_FILES['proof']['name']))
                {
                     $config['upload_path'] = './uploads/proof';
                     $config['allowed_types'] = '*';
                     $config['max_size'] = '10000';
                     $config['file_name'] = time() . mt_rand(1000,9999);
                     $this->upload->initialize($config);
                     if ($this->upload->do_upload('proof'))
                        {
                            $info2 = $this->upload->data();
                            $path2 = strstr($info2['full_path'],"uploads");
                        }
                        else
                        {
                            echo $this->upload->display_errors();
                        }
            }

            $result1=$this->user_model->insert_user($id, $nname,$rname,$status,$sex,$birth,$email, $degree,$path1,$state);
            $result2=$this->user_model->insert_iv($id,$company,$position,$work,$path2);
            if ($result1 && $result2) {
               echo "success";
                if ($company2) {
                 $res=$this->user_model->insert_company($company2);
                }
            }else{
                echo "false";
            }
         }




        public function st_reg(){//学生注册页面
            $this->load->model('user_model');
            $this->output->enable_profiler(TRUE);
            $id=$this->session->userdata('id');
            $nname=$this->input->post('nname');
            $rname=$this->input->post('name');
            $status=$this->input->post('status');//name_flag
            $sex=$this->input->post('sex');
            $birth=$this->input->post('birth');
            $email=$this->input->post('email');
            $degree=$this->input->post('degree');
            $state=1;
          
            $this->load->library('upload');
           
            $config['upload_path'] = './uploads/photo';
            $config['allowed_types'] = '*';
            $config['max_size'] = '10000';
            $config['file_name'] = time() . mt_rand(1000,9999);
            //载入上传类
            $this->upload->initialize($config);
            if ($this->upload->do_upload('photos'))
                {
                    $info1 = $this->upload->data();
                    $path1 =  strstr($info1['full_path'],"uploads");
                    // echo "<pre>";
                    // var_dump ($path1);
                    // echo "</pre></hr>";
                    // die();
                }
                else
                {
                    $path1='uploads/photo/moren.jpg';
                    echo $this->upload->display_errors();
                }
     

            $result1=$this->user_model->insert_user($id,$nname,$rname,$status,$sex,$birth,$email,$degree,$path1,$state);

            if ($result1) {
                $arr['state']=$state;    
                $this->session->set_userdata($arr);
                // $this->load->view('resume2');
                echo "success";
            }else{
                echo "false";
            }
         }
         public function do_st_iv_reg(){//导师注册页面
                $this->load->model('user_model');
                $this->output->enable_profiler(TRUE);
                $id=$this->session->userdata('id');
                $status=1;
                $state=2;
                $company=$this->input->post('company');
                $position=$this->input->post('position');
                $work=$this->input->post('text');
                $this->load->library('upload');

                       
                if (!empty($_FILES['proof']['name']))
                    {
                         $config['upload_path'] = './uploads/proof';
                         $config['allowed_types'] = '*';
                         $config['max_size'] = '10000';
                         $config['file_name'] = time() . mt_rand(1000,9999);
                         $this->upload->initialize($config);
                         if ($this->upload->do_upload('proof'))
                            {
                                $info2 = $this->upload->data();
                            }
                            else
                            {
                                echo $this->upload->display_errors();
                            }
                }
                $result1=$this->user_model->insert_user_iv($id,$status,$state);
                $result2=$this->user_model->insert_iv($id,$company,$position,$work,$info2['full_path']);
                if ($result1 && $result2) {
                     $arr = array(
                    'status'=>  $status,
                    'state'=>  $state,
                );
                $this->session->set_userdata($arr);  
                   echo "success";
                }else{
                    echo "false";
                }
             }



        public function login(){
            $this->load->view('login.php');
        }

        //验证码
         public function code(){
            $config = array(
                'width' => 100,
                'height'=>  40,
                'codeLen'=> 4,
                'fontSize'=>19
                );

            $this->load->library('code',$config);

            $this->code->show();

        }

            //验证验证码
        public function captcha(){
            $captcha=$this->input->post('captcha');
             if (strcasecmp( $captcha,$_SESSION['code']) == 0) {
                    echo "right";
                }else{
                    echo "wrong";
                }

        }

        public function do_login(){
            $this->load->model('user_model');
            $tel=$this->input->post('tel');
            $pass=$this->input->post('pass');
            $captcha=$this->input->post('captcha');

            $result=$this->user_model->get_name_by_pass($tel,$pass);
            $arr['tel']=$tel;    
            $this->session->set_userdata($arr);
            if($result){
                 $arr = array(
                    'id' => $result->user_id,
                    'status'=>  $result->status,
                    'state'=>  $result->state,
                );
                $this->session->set_userdata($arr);  
                if ($result->state == "0") {
                    if ($result->status == "0") {
                        $this->load->view('st_register.php');
                    }else if($result->status == "1") {
                         $this->load->view('iv_register.php');
                    }
                    
                }else if ($result->state == "1" || $result->state == "2") {
                    $this->load->view('index.php');
                }else if ($result->state == "3") {
                    echo "该用户已被注销";
                }          
            }else{
                 $this->load->view('login.php');

            }

        }
        public function login_out(){
            $this->session->sess_destroy();
                redirect('user/index');
        }
        public function center(){
            $this->load->view('user_center.php');
        }



        public function st_iv_reg(){
            $this->load->view('st_iv_register.php');
        }

//郑茹玉结束
        public function company(){//ajax形成公司列表
            $this->load->model('user_model');
            $company=$this->input->post('company');
           
            $arr=$this->user_model->select_company($company);
            // if ($arr) {
            //    echo "have";
            // }else{
            //     echo "none";
            // }
          
            echo json_encode($arr);
        }
         public function companyName(){//ajax判断公司是否在数据库内
            $this->load->model('user_model');
            $company=$this->input->post('company');
           
            $arr=$this->user_model->select_company_by_name($company);
            if ($arr) {
               echo "success";
            }else{
                echo "fail";
            }
          
        }





    }
