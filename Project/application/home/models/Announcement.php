<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Announcement extends CI_Model
{

    public function __construct() {
        parent::__construct();
    }
    
    public function create($a_title, $a_desc, $a_volid) {
        
        return $this->db->insert('org_announcement',[
                    'announcementTitle' => $a_title,
                    'announcementDesc' => $a_desc,
                    'volID' => $a_volid,
                 
                 ]);
    }
     public function get_info($a_id) {
        $this->db->select('announcementID,announcementTitle,announcementDesc,volID');
        $this->db->where('volID',$a_id);
        $query = $this->db->get('org_announcement');
        
        return $query->result_array();  
    }
    
    public function retrieve($a_id) {
        $this->db->select('announcementID,announcementTitle,announcementDesc,volID');
        $this->db->where('announcementID',$a_id);
        $query = $this->db->get('org_announcement');
        
        return $query->result_array();  
    }
    
     public function update($aid, $adata) {
         $this->db->where('announcementID',$aid);
         $this->db->update('org_announcement',$adata);
      
    }
    
    
    public function delete($aid){
        $this->db->where('announcementID',$aid);
        $this->db->delete('org_announcement');
    }
}