<?php
class Auth_model extends CI_Model{
    
    function validateUser($username, $password){
        
        $query = $this->db->query("CALL Auth_Validate_User(?)", array('UserName' => $username));
        
        if($query->num_rows() > 0){
            
            $Result = $query->result();
            
            
            if(isset($Result[0]->HasError)){
                return array('HasError'=>1 , 'Message'=>'Invalid Email Address');
            }else{
                
                foreach($query->result() as $row){
                
                    $store_password = $this->encryption->decrypt($row->Password);

                    if($password == $store_password){

                        $this->session->set_userdata(array(
                            'UserId' => $row->UserId,
                            'RoleId' => $row->RoleId,
                            'FullName' => $row->FullName
                        ));

                    }else{
                        return array('HasError'=>1, 'Message'=>'Invalid Password');
                    }
                }
            }
            
            
            
        }else{
            
            return array('HasError'=>1 , 'Message'=>'Invalid Email Address');
        }
        
    }
    
    
    function validateQuiz($data){
        
        $query = $this->db->query("CALL Quiz_Validate(?,?,?)", $data);
        
        return $query->result();
        
    }
    
}
