<?php

class Ajaxform extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                $this->load->model('formajax_model');
                $this->load->model('login_model');

                $this->load->helper(array('form', 'url'));

                $this->login_model->islogued();         
        }

        public function index()
        {
                $this->load->view('ajaxform/myajaxform');
        }

        public function send()
        {
                $data = $this->input->post('data');
                //echo $data;
                $dataready = $this->deserialize($data, array('title','tiponews','text'));
                
                $dataready['slug'] = url_title($dataready['title'], 'dash', TRUE);

                $success = $this->formajax_model->addreg($dataready);

                if ($success) 
                        $msg = "mensaje Ok";
                else
                        $msg = "mensaje todo mal";


                $resp = array(
                        'status' => $success,
                        'msg' => $msg
                );
               echo json_encode($resp);
        }


        public function deserialize($data,$allow=array()) {
                $clean=array();
                foreach ($data as $item) {
                        if(in_array($item['name'],$allow))
                                $clean[$item['name']]=htmlspecialchars($item['value']);
                }
                return $clean;
        }

}