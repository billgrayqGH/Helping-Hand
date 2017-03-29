
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SignIn extends CI_Controller {

      function __construct(){
            parent::__construct();
     
        }
        
        //Login Page
        public function login()
        {
            $this->load->view('login/volunteerlogin');
                $data['error'] = NULL;
                    $this->load->library('form_validation');
                    $this->form_validation->set_rules('username','Username','trim|required|min_length[5]|callback_username_check');
                    $this->form_validation->set_rules('password','Password','trim|required|min_length[5]|max_length[20]');
                    
                    if($this->form_validation->run() == FALSE)
                    {
                        $data['error'] = validation_errors();
                        $this->login();
                    }
                    else{
                        $this->load->model('Login_model');
                        $res =$this->Login_model
                                ->verify($this->input->post('username'),
                                        $this->input->post('password'));
                        if($res !== false)
                        {
                                 $this->session->set_userdata('username', $user['username']);
                                redirect(base_url('welcome/admin'));
                            
                        }
                    }
            
            
        } 

}

?>