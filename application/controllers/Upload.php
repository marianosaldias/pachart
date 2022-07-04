<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Upload extends CI_Controller{
	
	public function __construct(){
		parent::__construct();
		$this->load->model('coleccion_model');
		$this->load->library('form_validation');

		$this->load->model('inbox_model');

        $this->load->model('login_model');
        $this->login_model->islogued();  		
	}
	
	public function form(){
		$dataLastMsg = array(
				'inbox_lastentries' => $this->inbox_model->get_inboxLastMsg()
		);	
		$this->parser->parse('templates/header', $dataLastMsg);		
		$this->load->view('coleccion/upload_form');
		$this->load->view('templates/footer_form');
	}
	
	public function file_data(){
		$dataLastMsg = array(
				'inbox_lastentries' => $this->inbox_model->get_inboxLastMsg()
		);	

		//validate the form data 
		$this->form_validation->set_rules('art_title', 'Título', 'required');
		$this->form_validation->set_rules('art_tipoart', 'Tipo', 'required');

        if ($this->form_validation->run() == FALSE) {
			$this->parser->parse('templates/header', $dataLastMsg);		
			$this->load->view('coleccion/upload_form');
			$this->load->view('templates/footer_form');
		}
		else {
			//get the form values
			$data['art_iduser']		= $this->session->userdata('iduser');
			$data['art_tipoart']	= $this->input->post('art_tipoart');
			$data['art_title']		= $this->input->post('art_title');
			$data['art_artdetail']	= $this->input->post('art_artdetail');
			$data['art_desc']		= $this->input->post('art_desc');

			/*Convert tags array to string */
			$tagsarray 				= $this->input->post('art_tags');
			$tagsarrayToString 		= implode(",", $tagsarray);			
			$data['art_tags'] 		= $tagsarrayToString;
			
			$data['art_descfile']	= $this->input->post('art_descfile');
			$data['art_date']		= $this->input->post('art_date');

			//file upload code 
			//set file upload settings 
			$config['upload_path']	= APPPATH. '../img_collections/';
			$config['allowed_types']= 'gif|jpg|png';
			$config['max_size']		= 1024;

			$this->load->library('upload', $config);

			if ( ! $this->upload->do_upload('art_file')){
				$error = array('error' => $this->upload->display_errors());
				$this->load->view('coleccion/upload_form', $error);
			}
			else {

				//file is uploaded successfully
				//now get the file uploaded data 
				$upload_data		= $this->upload->data();

				//get the uploaded file name
				$data['art_file']	= $upload_data['file_name'];

				//store pic data to the db
				$this->coleccion_model->store_pic_data($data);

				redirect('/perfil?id=' . $this->session->userdata('iduser'));
			}

			$this->load->view('templates/upload_form');
		}
	}

}
