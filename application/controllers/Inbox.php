<?php 
class Inbox extends CI_Controller {

        public function __construct()
        {
                parent::__construct();

                $this->load->helper('date');
				
                $this->load->model('inbox_model');
				$this->load->model('login_model');
				$this->load->model('artistas_model');

                $this->login_model->islogued();

                $this->load->helper('url');
        }

		public function index()
		{
				$dataLastMsg = array(
						'inbox_lastentries' => $this->inbox_model->get_inboxLastMsg()
				);

				$inbox_entries = $this->inbox_model->get_inbox();
				$artist_entries = $this->artistas_model->get_allusers();
				$data = array(
						'inbox_entries'	 => $inbox_entries,
						'artist_entries' => $artist_entries
				);				

				$this->parser->parse('templates/header', $dataLastMsg);
				$this->parser->parse('inbox/index', $data);
				$this->load->view('templates/footer');
		}	

		public function sendcomment()
		{
			$data['idsendto']	= $this->input->post('idsendto');
			$data['idcont']		= $this->input->post('idcont');
			$data['tipocont']	= $this->input->post('tipocont');
			$data['subject']	= $this->input->post('subject');
			$data['comment']	= $this->input->post('comment');
			$data['iduser']		= $this->session->userdata('iduser');

			$this->inbox_model->insertMsg($data);
		}	

		public function sendmessage()
		{
			$data['idsendto']	= $this->input->post('idsendto');
			$data['idcont']		= "0";
			$data['tipocont']	= "chat";
			$data['subject']	= $this->input->post('subject');
			$data['comment']	= $this->input->post('comment');
			$data['iduser']		= $this->session->userdata('iduser');

			$this->inbox_model->insertMsg($data);
		}			

		public function deletecomment()
		{
			$id = $this->input->post('data');

			$this->inbox_model->deleteMsg($id);
		}		

}