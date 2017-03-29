<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Model
{

    public function __construct() {
        parent::__construct();
    }
    
    public function create($c_id,$c_name,$c_num,$c_email,$c_addr) {
        
        return $this->db->insert('v_contacts',[
                    'contactName' => $c_name,
                    'contactNumber' => $c_num,
                    'contactEmail' => $c_email,
                    'contactAddress' => $c_addr,
                    'volID' => $c_id,
                 ]);
        
    }
    
     public function get_info($a_id) {
        $this->db->select('contactID,contactName,contactNumber,contactEmail,contactAddress,volID');
        $this->db->where('volID',$a_id);
        $query = $this->db->get('v_contacts');
        
        return $query->result_array();
    }
    
     public function retrieve($c_id) {
        $this->db->select('contactID,contactName,contactNumber,contactEmail,contactAddress,volID');
        $this->db->where('contactID',$c_id);
        $query = $this->db->get('v_contacts');
        
        return $query->result_array();

        
    }
    
      public function delete($cid){
        $this->db->where('contactID',$cid);
        $this->db->delete('v_contacts');
    }
    
}