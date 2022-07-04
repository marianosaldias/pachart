<?php
class Upload extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                $this->load->helper(array('form', 'url'));
        }

        public function index()
        {
                $this->load->view('templates/header');
                $this->load->view('upload/upload_form', array('error' => ' ' ));
                $this->load->view('templates/footer');
        }

        public function do_upload()
        {
                $config['upload_path']          = './uploads/';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 400;
                $config['max_width']            = 1920;
                $config['max_height']           = 3000;

                //var_dump($config['max_height']); die();

                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('userfile'))
                {
                        $error = array('error' => $this->upload->display_errors());

                        $this->load->view('templates/header');
                        $this->load->view('upload/upload_form', $error);
                        $this->load->view('templates/footer');                        
                }
                else
                {
                        $data = array('upload_data' => $this->upload->data());

                        $this->load->view('templates/header');
                        $this->load->view('upload/upload_success', $data);
                        $this->load->view('templates/footer');                            
                }
        }
}
?>