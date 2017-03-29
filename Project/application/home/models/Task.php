<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Task extends CI_Model
{

    public function __construct() {
        parent::__construct();
    }
    
    public function assign($t_name,$t_date,$t_time,$t_loc, $t_desc, $t_volid) {
        
        return $this->db->insert('v_tasks',[
                    'taskName' => $t_name,
                    'taskDate' => $t_date,
                    'taskTime' => $t_time,
                    'taskLocation' => $t_loc,
                    'taskDescription' => $t_desc,
                    'volID' => $t_volid,
                 
                 ]);
    }
    
   
}