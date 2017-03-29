<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model
{
    
    public function __construct() {
        parent::__construct();
    }
    
    public function verify($user,$pass,$pos)     
    {
    
   
        $query = $this->db
                   ->select("volunteerID, volunteerFirstname, volunteerLastname")
                   ->where(array('volunteerUsername' => $user,
                                 'volunteerPassword' => $pass,
                                 'volunteerPosition' => $pos))
                   ->get('volunteer');
            $result = $query->row_array();  
            if($result) {
                 $logindata = array('userid' => $result['volunteerID'],
                                  'fname'   => $result['volunteerFirstname'],
                                  'lname'  => $result['volunteerLastname'],
                                  'pos' => $pos,
                                  'logged_in' => true);
                 $this->session->set_userdata($logindata); 
                 return true;
           }
           else {
                 return false;
           }
        
    }
    
 
    
    
}

