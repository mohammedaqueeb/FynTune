<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

    public function __construct() {

        parent::__construct();
        $this->load->model('Auth_model');
        $this->load->helper('cookie');
        $this->load->library('encryption');
    }

    function index() {
        
        if($this->session->userdata('UserId')) {
            redirect('Admin/Results');
        }else{
            $this->load->view('auth/login');    
        }
        
        
    }

    function login() {
        
        if($this->session->userdata('UserId')) {
            redirect('Admin/Results');
        }else{
            $this->load->view('auth/login');    
        }
    }
    
    function validateUser(){
        
        $this->form_validation->set_rules('UserName', 'Username', 'required|trim|valid_email');
        $this->form_validation->set_rules('Password', 'Password', 'required');
        
        if($this->form_validation->run()){
            
            $UserName = $this->security->xss_clean($this->input->post('UserName'));
            $Password = $this->security->xss_clean($this->input->post('Password'));
            
            
           $result = $this->Auth_model->validateUser($UserName, $Password);
            
               if($result == ''){
                   
                   redirect('Admin/QuizList');
                   
               }else{

                    $this->session->set_flashdata('message',$result['Message']);
                    redirect('auth/login');
               }
            
        } else{
            
           $this->login();
        }
        
	}
    
    function Quiz() {
        
        if($this->session->userdata('GuestUserId')){
            redirect('Quiz/QuizQuestion');
        }
        
        $this->load->view('auth/quiz');
            
    }
    
    
    function QuizValidate(){
        
        
        if ($this->input->is_ajax_request()) {
            
            $ajaxData = $this->input->post();
        
            $Param = array(
                'pFullName'  => $ajaxData['FullName'],
                'pMobileNo'  => $ajaxData['MobileNo'],
                'pEmail'  => $ajaxData['EmailAddress']
            );
            
            $result = $this->Auth_model->validateQuiz($Param);
            
            if(isset($result[0]->ID)){
                
                 if($result[0]->ID > 0){
                    $this->session->set_userdata(array(
                        'GuestUserId' => $result[0]->ID,
                        'RoleId' => 2,
                        'FullName' => $ajaxData['FullName']
                    ));
                 }
            }
            
            echo json_encode($result);
            
       }
	}
    
    function logout(){
        
      
        $this->load->driver('cache');   
        $user_id = array(
            'name'   => 'Fyntune',
            'value'  => '',
            'expire' => '0',
            'domain' => '.localhost',
            'prefix' => ''
        );

        delete_cookie($user_id);               
        $this->session->sess_destroy();
        $this->cache->clean();
        
        redirect('auth/login');
        
    }
    
    function logoutQuiz(){
        
      
        $this->load->driver('cache');   
        $user_id = array(
            'name'   => 'Fyntune',
            'value'  => '',
            'expire' => '0',
            'domain' => '.localhost',
            'prefix' => ''
        );

        delete_cookie($user_id);               
        $this->session->sess_destroy();
        $this->cache->clean();
        
        redirect('auth/Quiz');
        
    }

}
