<?php

class Users extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
        			
        	$this->load->model('user_model');
        	
                $this->login_model->islogued();
        }

        public function index()
        {
                $this->load->helper(array('form', 'url'));

                $this->load->library('form_validation');

		$this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[5]|max_length[12]');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[8]');
		$this->form_validation->set_rules('passconf', 'Password Confirmation', 'trim|required|matches[password]');
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');

                if ($this->form_validation->run() == FALSE)
                {
                        $this->load->view('users/myformusers');
                }
                else
                {
                        $form_user = $this->input->post('username');
                        $form_pass = $this->input->post('password');	
                        $form_email = $this->input->post('email');

                        $usernew = $this->user_model->adduser($form_user, $form_pass, $form_email);
                }
	}
		
        public function username_check($str)
        {
                if ($str == 'test')
                {
                        $this->form_validation->set_message('username_check', 'The {field} field can not be the word "test"');
                        return FALSE;
                }
                else
                {
                        return TRUE;
                }
        }

}