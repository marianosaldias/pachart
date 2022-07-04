<?php

class Loginform extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                $this->load->helper('url');
                $this->load->model('login_model');
        }

        /*
        public function index()
        {
                $this->load->helper(array('form', 'url'));
				$this->load->library('form_validation');
				$this->form_validation->set_rules('logemail', 'Email', 'trim|required|min_length[10]|max_length[30]');
				$this->form_validation->set_rules('logpassword', 'Password', 'trim|required|min_length[8]');

                if ($this->form_validation->run() == FALSE)
                {
                        $this->load->view('templates/header');
                        $this->load->view('loginform/loginform');
                        $this->load->view('templates/footer');
                }
                else
                {
	        		$form_email = $this->input->post('logemail');
	        		$form_pass = $this->input->post('logpassword');		
	        		
	        		$logueo = $this->login_model->auth($form_email, $form_pass);

	        		if ($logueo == true) {
	        			redirect($base_url . "/index");
	        		};		
	        		if ($logueo == false) {
	        			redirect($base_url . "/index");
	        		}
                }
		}
        */

        public function index()
        {
                $this->load->view('templates/header');
                $this->load->view('index/index_login');
                $this->load->view('templates/footer_form');
        }

        public function loginHeadForm()
        {
                $logueo = false;

                // user + pass
                $form_email = $this->input->post('logemail');
                $form_pass = $this->input->post('logpassword');   

                // reCaptcha
                /*
                $recaptcha = $_POST["g-recaptcha-response"];
         
                $url = "https://www.google.com/recaptcha/api/siteverify";
                $data = array(
                        'secret' => '6LcWp1EUAAAAANRFBuCEfMa7a6tgRT6y7KhHxbea',
                        'response' => $recaptcha
                );
                $options = array(
                        'http' => array (
                                'header' => "Content-Type: application/x-www-form-urlencoded",
                                'method' => 'POST',
                                'content' => http_build_query($data)
                        )
                );
                $context  = stream_context_create($options);
                $verify = file_get_contents($url, false, $context);
                $captcha_success = json_decode($verify);

                if ($captcha_success->success) {
                        // No eres robot!!! :)
                        $logueo = $this->login_model->auth($form_email, $form_pass);
                } else {
                        // Eres un robot
                }
                */

                $logueo = $this->login_model->auth($form_email, $form_pass);

                if ($logueo == true) {
                        $dato['status'] = "ok";
                        echo json_encode($dato);
                };              
                if ($logueo == false) {
                        $dato['status'] = "ko";
                        echo json_encode($dato);
                }
        }

        public function closesection()
        {
                $array_items = array('iduser', 'nick', 'email', 'username', 'logged_in','avatar','userpass','status');
                $this->session->unset_userdata($array_items);
                redirect($base_url . "index");
                //En la web:
                //redirect($base_url . "index.php/index");
        }	
		
        /*
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
        */

}