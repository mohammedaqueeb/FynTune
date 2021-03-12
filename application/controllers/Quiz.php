<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Quiz extends CI_Controller {

        
    public function __construct(){
        
        parent::__construct();
        if(!$this->session->userdata('GuestUserId')){
            redirect('auth/Quiz');
        }
        $this->load->model('Quiz_model');
        $this->load->library('encryption');
    }
    
    function QuizQuestion() {
        
         $this->load->view('pages/quiz'); 
    }
    function QuizResult() {
        
         $this->load->view('pages/results'); 
    }
    
    function QuizSubmit() {
        
        if ($this->input->is_ajax_request()) {
            
            $ajaxData = $this->input->post();
            
            $Param = array(
                'pUserId' => $ajaxData['TotalQuestion'],
                'pTotalQuestion' => $ajaxData['TotalQuestion'],
                'pAttemptQuestion'  => $ajaxData['AttemptQuestion'],
                'pCorrectQuestion'  => $ajaxData['CorrectQuestion'],
                'pScore'  => $ajaxData['Score']
            );
            
            $result = $this->Quiz_model->QuizMasterManage($Param);
            if($result[0]->ID > 0){
                foreach ($ajaxData['Quiz'] as $value) {
                    $Param1 = array(
                        'pQuizId' => $result[0]->ID,
                        'pQuestion' => $value['question'],
                        'pUserAns'  => $value['user_answer'],
                        'pCorrectAns'  => $value['correct_answer']
                    );                    
                    $result1 = $this->Quiz_model->QuizDetailsManage($Param1);
                }
            }
            
            echo json_encode(array('TotalQuestion' => $ajaxData['TotalQuestion'],
                'AttemptQuestion'  => $ajaxData['AttemptQuestion'],
                'CorrectQuestion'  => $ajaxData['CorrectQuestion'],
                'Score'  => $ajaxData['Score']
            ));
            
       }
    }
    
    
    
    
}
