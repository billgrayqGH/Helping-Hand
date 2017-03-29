<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Event extends CI_Model
{

    public function __construct() {
        parent::__construct();
    }
    
    public function create($e_name,$e_date,$e_time,$e_loc, $e_desc, $e_volid) {
        
        return $this->db->insert('org_event',[
                    'eventName' => $e_name,
                    'eventDate' => $e_date,
                    'eventTime' => $e_time,
                    'eventLocation' => $e_loc,
                    'eventDescription' => $e_desc,
                    'volID' => $e_volid,
                 
                 ]);
    }
    
     public function retrieve($e_id) {
        $this->db->select('eventID,eventName,eventDate,eventTime,eventLocation,eventDescription,volID');
        $this->db->where('eventID',$e_id);
        $query = $this->db->get('org_event');
        
        return $query->result_array();  
    }
    
     public function update($eid, $edata) {
         $this->db->where('eventID',$eid);
         $this->db->update('org_event',$edata);
      
    }
    public function delete($eid){
        $this->db->where('eventID',$eid);
        $this->db->delete('org_event');
    }
}