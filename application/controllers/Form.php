<?php

class Form extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
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
                        $this->load->view('templates/header');
                        $this->load->view('form/myform');
                        $this->load->view('templates/footer');
                }
                else
                {
						$data = array(
							'blog_title' => 'Cargando datos de un form',
							'user' => $this->input->post('username'),
							'pass' => $this->input->post('password'),
							'mail' => $this->input->post('email')
						);						
						$this->parser->parse('templates/header', $data);
						$this->parser->parse('form/formsuccessparse', $data);
						$this->load->view('templates/footer');						
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