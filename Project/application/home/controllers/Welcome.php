<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

         function __construct(){
            parent::__construct();
        }
 //------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------       
	//Helping Hand Home Page
	public function index()
	{
		$this->load->view('homeparts/hometop');
                $this->load->view('homeparts/homehero');
                $this->load->view('homeparts/homeservice');
                $this->load->view('homeparts/homeannouncements');
                $this->load->view('homeparts/homeevents');
                $this->load->view('homeparts/homeabout');
                $this->load->view('homeparts/homecontacts');
                $this->load->view('homeparts/homeend');
	}
//------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------        
       //Login Page Functions
        public function signin()
        {
            $this->load->view('login/volunteerlogin');
        }
        
    
        public function login()
        {
                $data['error'] = NULL;
                    
                    $this->form_validation->set_rules('username','Username','trim|required|min_length[5]|callback_username_check');
                    $this->form_validation->set_rules('password','Password','trim|required|min_length[5]|max_length[20]');
                    
                    if($this->form_validation->run() == FALSE)
                    {
                        $data['error'] = validation_errors();
                        $this->load->view('login/volunteerlogin');
                    }
                    else            
                     {  
                        $u = $this->input->post('username');
                        $p = $this->input->post('password');
                        $ps = $this->input->post('position');
                        $this->load->model('Login_model');
                        $result = $this->Login_model->verify($u,$p,$ps);      
                       
                        if($result == true)
                          {
                            if($this->session->userdata('logged_in')== true)
                            {   
                             $id = $this->session->userdata('userid');
                             $this->dashboard($ps,$id);
                            }
                               
                          }
                        else
                       {
                         $this->session->set_flashdata('login_failed', 'Sorry, the login info that you entered is invalid');  
                         $this->signin();    
                       }
                     }
        } 
        
        public function logout()
        {
           //Unset user data
        $this->session->unset_userdata('userid');
        $this->session->unset_userdata('fname');
        $this->session->unset_userdata('lname');
        $this->session->unset_userdata('logged_in');
        $this->session->sess_destroy();
        
         //Set message
        $this->session->set_flashdata('logged_out', 'You have been logged out');
        $this->load->view('login/volunteerlogin');
        }
        
        //End of Login Functions
//-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------        
  //CALL BACK FUNCTIONS  
            public function username_check($str)
                  {
                    if(isset($requested_username))
                      {
                      $this->load->model('Volunteer');
                           $q = $this->Volunteer->username_exists($requested_username);
                                 if($q==TRUE)
                                     {
                                         $this->form_validation->set_message('username_exists','%s already exist !!');
                                         return FALSE;
                                     }
                      }
                    } 

            public function email_check($str)
                  {
                      $this->load->model('Volunteer');
                      if(isset($requested_email))
                      {
                           $q = $this->Volunteer->email_exists($requested_email);
                                 if($q==TRUE)
                                     {
                                         $this->form_validation->set_message('email_exists','%s already exist !!');
                                         return FALSE;
                                     }
                      }
                    } 
                    
            public function valid_date($date)
            {
               $format = 'Y-m-d';
               $d = DateTime::createFromFormat($format, $date);
               //Check for valid date in given format
               if($d && $d->format($format) == $date) {
                  return true;
               } else {
                 $this->form_validation->set_message('valid_date', 
                           'The %s date is not valid it should match this ('.$format.') format');
                    return false;
               }
            }
       //END OF CALL BACK FUNCTIONS
//-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
     //Email Function
            
            public function send_mail()
            {
            
                $this->load->library('email');
                 
                $this->form_validation->set_rules('name','Name','required');
                $this->form_validation->set_rules('email','Email','trim|required|valid_email');
                $this->form_validation->set_rules('subject','Subject','required');
                $this->form_validation->set_rules('message','Message','required');
                
                 if($this->form_validation->run() == FALSE)
                 {
                        $data['error'] = validation_errors();
                        $this->index();
                 }
                else 
                {
                    $n = $this->input->post('name');
                    $e = $this->input->post('email');
                    $s = $this->input->post('subject');
                    $m = $this->input->post('message');

                    $this->email->from($e, $n);
                    $this->email->to('BillGray.Quitalig@georgebrown.ca'); 
                    $this->email->subject($s);
                    $this->email->message($m);	
                    $this->email->send();
                    $this->session->set_flashdata('sent', 'Email Sent');
                    $this->index();
                }
            }
            
            public function send()
            {
            
                $this->load->library('email');
                 
                $this->form_validation->set_rules('name','Name','required');
                $this->form_validation->set_rules('email1','Email','trim|required|valid_email');
                $this->form_validation->set_rules('email2','Email','trim|required|valid_email');
                $this->form_validation->set_rules('subject','Subject','required');
                $this->form_validation->set_rules('message','Message','required');
                
                 if($this->form_validation->run() == FALSE)
                 {
                        $data['error'] = validation_errors();
                        $pos = $this->session->userdata('pos');
                        if($pos == 'user')
                        {
                            $this->email2();
                        }
                        else 
                         {
                           $this->email();
                         }
                 }
                else 
                {
                    $n = $this->input->post('name');
                    $e1 = $this->input->post('email1');
                    $e2 = $this->input->post('email2');
                    $s = $this->input->post('subject');
                    $m = $this->input->post('message');

                    $this->email->from($e1, $n);
                    $this->email->to($e2); 
                    $this->email->subject($s);
                    $this->email->message($m);	
                    $this->email->send();
                    $this->session->set_flashdata('sent', 'Email Sent');
                    $pos = $this->session->userdata('pos');
                        if($pos == 'user')
                        {
                            $this->email2();
                        }
                        else 
                         {
                           $this->email();
                         }
                }
            }
     //End Email Function       
//-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------            

       //CREATE INFOS FOR THE WEBSITE    
         public function reg()
        {
          $this->load->view('register/volunteerregister');
        }
        
         public function signup()
        {
            $data['error'] = NULL;
                    $this->load->library('form_validation');
                    
                    $this->form_validation->set_rules('firstname','Firstname','required');
                    $this->form_validation->set_rules('lastname','Lastname','required');
                    $this->form_validation->set_rules('username','Username','trim|required|min_length[5]|callback_username_check');
                    $this->form_validation->set_rules('password','Password','trim|required|min_length[5]|max_length[20]');
                    $this->form_validation->set_rules('password2','ConfirmPass','trim|required|matches[password]');
                    $this->form_validation->set_rules('address','Address','required');
                    $this->form_validation->set_rules('contactno', 'ContactNo','required');
                    $this->form_validation->set_rules('email','Email','trim|required|valid_email|callback_email_check');
                    if($this->form_validation->run() == FALSE)
                    {
                        $data['error'] = validation_errors();
                        $this->load->view('register/volunteerregister');
                    }
                    else 
                    {
                       
                            $vFname = $this->input->post('firstname');
                            $vLname = $this->input->post('lastname');
                            $vUname = $this->input->post('username');
                            $vPass = $this->input->post('password');
                            $vAddr = $this->input->post('address');
                            $vCon = $this->input->post('contactno');
                            $vMail = $this->input->post('email');
                            
                      
                        $this->load->model('Volunteer');
                        $v_id = $this->Volunteer->create($vFname,$vLname, $vUname, $vPass, $vAddr, $vCon,$vMail);
                     
                       $this->load->view('login/volunteerlogin');
                    } 
        }   
        //END OF REGISTRATION
        
        //Delete Volunteer Record
        public function delete_vol($volID)
        { 
            $this->load->model('Volunteer');
            $this->Volunteer->delete($volID);
            $this->vdvol();
           
            
        }
 //-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------       
        // Create Announcement
        public function create_ann()
        {
            $data['error'] = NULL;
                    $this->load->library('form_validation');
                    
                    $this->form_validation->set_rules('title','Title','required');
                    $this->form_validation->set_rules('description','Description','required');
                    
          
                    if($this->form_validation->run() == FALSE)
                    {
                        $data['error'] = validation_errors();
                        
                        $pos = $this->session->userdata('pos');
                        if($pos == 'user')
                        {
                        $this->aann2();
                        }
                        else 
                         {
                              $this->aann();
                         }
                    }
                    else 
                    {
                        $aid = $this->session->userdata('userid');
                        $at = $this->input->post('title');
                        $ad = $this->input->post('description');
                           
                     
                        $this->load->model('Announcement');
                        $a_id = $this->Announcement->create($at,$ad, $aid);
                        
                        $pos = $this->session->userdata('pos');
                        if($pos == 'user')
                        {
                        $this->aann2();
                        }
                        else 
                         {
                              $this->aann();
                         }
                        
                    } 
        }
        
        //Delete Announcements
        public function delete_ann($annID)
        { 
            $this->load->model('Announcement');
            $this->Announcement->delete($annID);
              $pos = $this->session->userdata('pos');
                  if($pos == 'user')
                    {
                        $this->vdann2();
                    }
                 else 
                    {
                         $this->vdann();
                    }
           
            
        }
        
        //Retrieve Announcement Info for Admin
        public function eann($annID)
        {
            $this->load->model('Announcement');
            $data['announcement_info'] = $this->Announcement->retrieve($annID);
            $this->load->view('parts/top');
            $this->load->view('navs/navadmin');
            $this->load->view('announcement/eannouncementcon',$data);
            $this->load->view('parts/end');
            
        }  
        
        //Retrieve Announcement Info for User
         public function eann2($annID)
        {
            $this->load->model('Announcement');
            $data['announcement_info'] = $this->Announcement->retrieve($annID);
            $this->load->view('parts/top');
            $this->load->view('navs/navuser');
            $this->load->view('announcement/eannouncementcon',$data);
            $this->load->view('parts/end');
        }
        
         //Update Announcements
        public function update_ann()
        { 
           
            $ai = $this->input->post('id');
            
            $data = array( 
                        'announcementTitle' => $this->input->post('title'),
                        'announcementDesc' => $this->input->post('description'),  
                        'volID' => $this->input->post('vid') 
                        );
          
            $this->load->model('Announcement');
            $this->Announcement->update($ai,$data);
            
            $pos = $this->session->userdata('pos');
                  if($pos == 'user')
                    {
                        $this->vdann2();
                    }
                 else 
                    {
                         $this->vdann();
                    }
           
            
        }
        
///-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------        
         // Create Events
        public function create_eve()
        {
            $data['error'] = NULL;
                    $this->load->library('form_validation');
                    
                    $this->form_validation->set_rules('eventname','EventName','required');
                    $this->form_validation->set_rules('eventdate','EventDate','required|callback_valid_date');
                    $this->form_validation->set_rules('eventtime','EventTime','required');
                    $this->form_validation->set_rules('eventlocation','EventLocation','required');
                    $this->form_validation->set_rules('eventdesc','EventDescription','required');
                    
          
                    if($this->form_validation->run() == FALSE)
                    {
                        $data['error'] = validation_errors();
                         $pos = $this->session->userdata('pos');
                        if($pos == 'user')
                        {
                            $this->aeve2();
                        }
                        else 
                         {
                           $this->aeve();
                         }
                    }
                    else 
                    {
                        $eid = $this->session->userdata('userid');
                        $en = $this->input->post('eventname');
                        $ed = $this->input->post('eventdate');
                        $et = $this->input->post('eventtime');
                        $el = $this->input->post('eventlocation');
                        $edc = $this->input->post('eventdesc');
                           
                     
                        $this->load->model('Event');
                        $e_id = $this->Event->create($en,$ed,$et,$el,$edc,$eid);
                        $pos = $this->session->userdata('pos');
                        if($pos == 'user')
                        {
                            $this->aeve2();
                        }
                        else 
                         {
                           $this->aeve();
                         }
                        
                    } 
        }
        
         //Delete Events
        public function delete_eve($eveID)
        { 
            $this->load->model('Event');
            $this->Event->delete($eveID);
            $this->vdeve();
           
            
        }
        
         //Retrieve Event Info for Admin
        public function eeve($eveID)
        {
            $this->load->model('Event');
            $data['event_info'] = $this->Event->retrieve($eveID);
            $this->load->view('parts/top');
            $this->load->view('navs/navadmin');
            $this->load->view('events/eeventscon',$data);
            $this->load->view('parts/end');
        }
        
        //Update Event
        public function update_eve()
        { 
           
            $ei = $this->input->post('id');
            
            $data = array( 
                        'eventName' => $this->input->post('name'),
                        'eventDate' => $this->input->post('date'),
                        'eventTime' => $this->input->post('time'),
                        'eventLocation' => $this->input->post('location'),
                        'eventDescription' => $this->input->post('description'),  
                        'volID' => $this->input->post('vid') 
                        );
          
            $this->load->model('Event');
            $this->Event->update($ei,$data);
            
            $this->vdeve();
            
        }

///-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------        
        // Create Contacts 
        public function create_con()
         {  
            $data['error'] = NULL;
                    $this->load->library('form_validation');
                    $this->form_validation->set_rules('contactname','ContactName','required');
                    $this->form_validation->set_rules('contactnum', 'ContactNo','required');
                    $this->form_validation->set_rules('contactemail','ContactEmail','trim|valid_email');
                    $this->form_validation->set_rules('contactaddress','Address','min_length[5]');
            
                    if($this->form_validation->run() == FALSE)
                    {
                        $data['error'] = validation_errors();
                        $pos = $this->session->userdata('pos');
                        if($pos == 'user')
                        {
                            $this->acon2();
                        }
                        else 
                         {
                           $this->acon();
                         }
                    }
                    else 
                    {
                           $cid = $this->session->userdata('userid');
                           $cnm = $this->input->post('contactname');
                           $cno  = $this->input->post('contactnum');
                           $cne = $this->input->post('contactemail');
                           $cna = $this->input->post('contactaddress');
                            
                        $this->load->model('Contact'); 
                        $c_id = $this->Contact->create($cid,$cnm,$cno,$cne,$cna);
                        $pos = $this->session->userdata('pos');
                        if($pos == 'user')
                        {
                            $this->acon2();
                        }
                        else 
                         {
                           $this->acon();
                         }
                    } 
        }
        
         //Delete Contacts
        public function delete_con($conID)
        { 
            $this->load->model('Contact');
            $this->Contact->delete($conID);
              $pos = $this->session->userdata('pos');
                  if($pos == 'user')
                    {
                        $this->vdcon2();
                    }
                 else 
                    {
                         $this->vdcon();
                    }
           
            
        }
        
         //Retrieve Contact Info for Admin
         public function econ($conID)
        {
            $this->load->model('Contact');
            $data['contact_info'] = $this->Contact->retrieve($conID); 
            $this->load->view('parts/top');
            $this->load->view('navs/navadmin');
            $this->load->view('contacts/econtactscon',$data);
            $this->load->view('parts/end');
        }
        
        //Retrieve User Info for User
         public function econ2($conID)
        {
            $this->load->model('Contact');
            $data['contact_info'] = $this->Contact->retrieve($conID); 
            $this->load->view('parts/top');
            $this->load->view('navs/navadmin');
            $this->load->view('volunteercontact/econtactscon2',$data);
            $this->load->view('parts/end');
        }
        
//----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------        
        //Create Tasks
        public function create_task()
        {
            $data['error'] = NULL;
                    $this->load->library('form_validation');
                    
                    $this->form_validation->set_rules('taskname','TaskName','required');
                    $this->form_validation->set_rules('taskdate','TaskDate','required|callback_valid_date');
                    $this->form_validation->set_rules('tasktime','TaskTime','required');
                    $this->form_validation->set_rules('tasklocation','TaskLocation','required');
                    $this->form_validation->set_rules('taskdescription','TaskDescription','required');
                    
          
                    if($this->form_validation->run() == FALSE)
                    {
                        $data['error'] = validation_errors();
                        $this->vdtask();
                    }
                    else 
                    {
                        $tid = $this->input->post('volid');
                        $tn = $this->input->post('taskname');
                        $td = $this->input->post('taskdate');
                        $tt = $this->input->post('tasktime');
                        $tl = $this->input->post('tasklocation');
                        $tdc = $this->input->post('taskdesc');
                           
                     
                        $this->load->model('Task');
                        $t_id = $this->Task->assign($tn,$td,$tt,$tl,$tdc,$tid);
                        $this->vdvol();
                        
                        
                    } 
        }
        
//----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------        
        //ADMIN PAGE    
        public function dashboard($pos,$id1)
        {
            if($pos == 'admin' | $pos == 'leader')
            {    
          
            $this->load->view('parts/top');
            $this->load->view('navs/navadmin');
            $this->load->model('Volunteer');
            $data['volunteer_info'] = $this->Volunteer->get_info($id1);
            $this->load->view('volunteer/vprofile',$data);
            $this->load->view('parts/end');
            }
            else if($pos == 'user')
            {
                
            $this->load->view('parts/top');
            $this->load->view('navs/navuser');
            $this->load->model('Volunteer');
            $data['volunteer_info'] = $this->Volunteer->get_info2($id1);
            $this->load->view('volunteer/vprofile2',$data);
            $this->load->view('parts/end');
            }  
         }
        
        
        //Volunteer Announcements
        public function voleve(){
            $this->load->view('parts/top');
            $this->load->view('navs/navadmin');
            $this->load->view('volunteerevent/volevent');
            $this->load->view('parts/end');
        }
        
          
       //Volunteer Announcements
        public function volann(){
            $this->load->view('parts/top');
            $this->load->view('navs/navadmin');
            $this->load->view('volunteerannouncement/volannouncements');
            $this->load->view('parts/end');
        }
        
         //Email
        public function email()
        {
            $this->load->view('parts/top');
            $this->load->view('navs/navadmin');
            $this->load->view('email/email2con');
            $this->load->view('parts/end');
        }
        
        //Chat
        public function chat()
        {
            $this->load->view('parts/top2');
            $this->load->view('navs/navadmin');
            $this->load->view('chat/chat2con');
            $this->load->view('parts/end2');
        }
        
        //Calendar
        public function calendar()
        {
            $this->load->view('parts/top3');
            $this->load->view('navs/navadmin');
            $this->load->view('volunteercalendar/volunteercalendar');
            $this->load->view('parts/end3');
        }
        //Task
        public function etask()
        {
            $this->load->view('parts/top');
            $this->load->view('navs/navadmin');
            $this->load->view('task/etaskcon');
            $this->load->view('parts/end');
        }
        public function vdtask()
        {
            $this->load->view('parts/top');
            $this->load->view('navs/navadmin');
            $this->load->view('task/vdtaskcon');
            $this->load->view('parts/end');
        }
        
        //Announcements
        public function vdann()
        {
            $this->load->view('parts/top');
            $this->load->view('navs/navadmin');
            $this->load->view('announcement/vdannouncementcon');
            $this->load->view('parts/end');
        }
      
        public function aann()
        {
            $this->load->view('parts/top');
            $this->load->view('navs/navadmin');
            $this->load->view('announcement/aannouncementcon');
            $this->load->view('parts/end');
        }
        
         //Events
        public function vdeve()
        {
            $this->load->view('parts/top');
            $this->load->view('navs/navadmin');
            $this->load->view('events/vdeventscon');
            $this->load->view('parts/end');
        }
     
         public function aeve()
        {   
            $this->load->view('parts/top');
            $this->load->view('navs/navadmin');
            $this->load->view('events/aeventscon');
            $this->load->view('parts/end');
        }
        
        //Contacts
         public function vdcon()
        {
            $this->load->view('parts/top');
            $this->load->view('navs/navadmin');
            $this->load->view('contacts/vdcontactscon');
            $this->load->view('parts/end');
        }
       
         public function acon()
        {
            $this->load->view('parts/top');
            $this->load->view('navs/navadmin');
            $this->load->view('contacts/acontactscon');
            $this->load->view('parts/end');
        }
        
        //Volunteer
         public function vdvol()
        {
            $this->load->view('parts/top');
            $this->load->view('navs/navadmin');
            $this->load->view('volunteer/vdvolunteercon');
            $this->load->view('parts/end'); 
        }
        
        public function evol()
        {
            $id1 = $this->session->userdata('userid');
            $this->load->view('parts/top');
            $this->load->view('navs/navadmin');
            $this->load->model('Volunteer');
            $data['volunteer_info'] = $this->Volunteer->get_info($id1);
            $this->load->view('volunteer/evolunteercon',$data);
            $this->load->view('parts/end');
            
           
        }
        public function volview()
        {
            $id1 = $this->session->userdata('userid');
            $this->load->view('parts/top');
            $this->load->view('navs/navadmin');
            $this->load->model('Volunteer');
            $data['volunteer_info'] = $this->Volunteer->get_info($id1);
            $this->load->view('volunteer/vprofile',$data);
            $this->load->view('parts/end');
        }
        public function voltask()
        {
            $this->load->view('parts/top');
            $this->load->view('navs/navadmin');
            $this->load->view('volunteertask/voltaskcon');
            $this->load->view('parts/end');
        }
        
        
        //Availability  
         public function vava($id1)
        {
            $data['volID'] = $id1;
            $this->load->view('parts/top');
            $this->load->view('navs/navadmin');
            $this->load->view('availability/volavailabilitycon',$data);
            $this->load->view('parts/end');
        }
        
        
        // END ADMIN PAGE
  
   //-------------------------------------------------------------------------------------------------------------------------------------------------------------------------     
       
        //MEMBER PAGES
           public function voleve2(){
            $this->load->view('parts/top');
            $this->load->view('navs/navuser');
            $this->load->view('volunteerevent/volevent');
            $this->load->view('parts/end');
        }
        
          
       //Volunteer Announcements
        public function volann2(){
            $this->load->view('parts/top');
            $this->load->view('navs/navuser');
            $this->load->view('volunteerannouncement/volannouncements');
            $this->load->view('parts/end');
        }
        
         //Email
        public function email2()
        {
            $this->load->view('parts/top');
            $this->load->view('navs/navuser');
            $this->load->view('email/email2con');
            $this->load->view('parts/end');
        }
        
        //Chat
        public function chat2()
        {
            $this->load->view('parts/top2');
            $this->load->view('navs/navuser');
            $this->load->view('chat/chat2con');
            $this->load->view('parts/end2');
        }
        
        //Calendar
        public function calendar2()
        {
            $this->load->view('parts/top3');
            $this->load->view('navs/navuser');
            $this->load->view('volunteercalendar/volunteercalendar');
            $this->load->view('parts/end3');
        }
      
        
        //Announcements
        public function vdann2()
        {
            $uid = $this->session->userdata('userid');
            $this->load->view('parts/top');
            $this->load->view('navs/navuser');
            $this->load->model('Announcement');
            $data['volunteer_info'] = $this->Announcement->get_info($uid);
            $this->load->view('announcement/vdannouncementcon2',$data);
            $this->load->view('parts/end');
            
           
        }
       
        public function aann2()
        {
            $this->load->view('parts/top');
            $this->load->view('navs/navuser');
            $this->load->view('volunteerannouncement/aannouncementcon2');
            $this->load->view('parts/end');
        }
        
       
        
        //Contacts
         public function vdcon2()
        {
            $uid = $this->session->userdata('userid'); 
            $this->load->view('parts/top');
            $this->load->view('navs/navuser');
            $this->load->model('Contact');
            $data['volunteer_info'] = $this->Contact->get_info($uid);
            $this->load->view('contacts/vdcontactscon2',$data);
            $this->load->view('parts/end');
        }
      
         public function acon2()
        {
            $this->load->view('parts/top');
            $this->load->view('navs/navuser');
            $this->load->view('volunteercontact/acontactscon2');
            $this->load->view('parts/end');
        }
        
        //Volunteer
      
        public function evol2($id1)
        {
            $this->load->view('parts/top');
            $this->load->view('navs/navadmin');
            $this->load->model('Volunteer');
            $data['volunteer_info'] = $this->Volunteer->get_info2($id1);
            $this->load->view('volunteer/evolunteercon2',$data);
            $this->load->view('parts/end');
        }
        public function volview2()
        {
            $id1 = $this->session->userdata('userid');
            $this->load->view('parts/top');
            $this->load->view('navs/navuser');
            $this->load->model('Volunteer');
            $data['volunteer_info'] = $this->Volunteer->get_info2($id1);
            $this->load->view('volunteer/vprofile2',$data);
            $this->load->view('parts/end');
        }
        public function voltask2()
        {
            $this->load->view('parts/top');
            $this->load->view('navs/navuser');
            $this->load->view('volunteertask/voltaskcon');
            $this->load->view('parts/end');
        }
        
       
        //END OF VOLUNTEER PAGES

}
