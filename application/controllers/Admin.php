<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

        
    public function __construct(){
        
        parent::__construct();
        if(!$this->session->userdata('UserId')){
            redirect('auth/login');
        }
        
        $this->load->model('Quiz_model');
    }
    
    function QuizList(){
        
        if ($this->input->is_ajax_request()) {
            
            $ajaxData = $this->input->post();
        
            $Param = array(
                'pAction'  => 1,
                'pQuizId'  => 0,
                'pUserId'  => 0,
                'pQuizDetailId'  => 0,
                'pDateFrom'  => $ajaxData['DateFrom'],
                'pDateTo'  => $ajaxData['DateTo']
           ); 

           $result = $this->Quiz_model->QuizFetch($Param);
           echo json_encode($result);
            
       }else{
            $this->load->view('pages/quizList');
            
        }
        
	}
    
    function QuizDetailsList(){
        
        if ($this->input->is_ajax_request()) {
            
            $ajaxData = $this->input->post();
        
            $Param = array(
                'pAction'  => 2,
                'pQuizId'  => $ajaxData['QuizId'],
                'pUserId'  => 0,
                'pQuizDetailId'  => 0,
                'pDateFrom'  => "2020-02-02",
                'pDateTo'  => "2020-02-02"
           ); 

           $result = $this->Quiz_model->QuizFetch($Param);
           echo json_encode($result);
            
       }else{
            $this->load->view('pages/quizDetailsList');
            
        }
        
	}
    
}
