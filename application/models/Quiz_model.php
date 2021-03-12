<?php
class Quiz_model extends CI_Model{
    
    
    function QuizMasterManage($data){
        
        $query = $this->db->query("CALL Quiz_Master_Manage(?,?,?,?,?)", $data);
        $query->next_result(); 
        return $query->result();
        
    }
    
    function QuizDetailsManage($data){
        
        $query = $this->db->query("CALL Quiz_Details_Manage(?,?,?,?)", $data);
        $query->next_result();
        return $query->result();
    }
    
    function QuizFetch($data){
        
        $query = $this->db->query("CALL Quiz_Fetch(?,?,?,?,?,?)", $data);
        return $query->result();
    }
    
    
    
}
