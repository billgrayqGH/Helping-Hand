<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Volunteer extends CI_Model
{

    public function __construct() {
        parent::__construct();
    }
    
    public function create($v_fname,$v_lname,$v_uname,$v_pass,$v_addr,$v_cont,$v_email) {
        
        return $this->db->insert('volunteer',[
                    'volunteerFirstname' => $v_fname,
                    'volunteerLastname' => $v_lname,
                    'volunteerUsername' => $v_uname,
                    'volunteerPassword' => $v_pass,
                    'volunteerAddress' => $v_addr,
                    'volunteerContact' => $v_cont,
                    'volunteerEmail' => $v_email,
                 ]);
    }
    public function get_info($a_id) {
        $this->db->select('volunteerFirstname,volunteerLastname,volunteerAddress,volunteerContact,volunteerEmail,volunteerUsername,volunteerPassword');
        $this->db->where('volunteerID',$a_id);
        $query = $this->db->get('volunteer');
        
        return $query->result_array();

        
    }
    
     public function get_info2($a_id) {
        $this->db->select('volunteerID,volunteerFirstname,volunteerLastname,volunteerAddress,volunteerContact,volunteerEmail,volunteerUsername,volunteerPassword');
        $this->db->where('volunteerID',$a_id);
        $query = $this->db->get('volunteer');
        
        return $query->result_array();

        
    }
    
    public function delete($vid){
        $this->db->where('volunteerID',$vid);
        $this->db->delete('volunteer');
    }

}
?>
