<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Upload extends CI_Controller{
	
	public function __construct(){
		parent::__construct();
		$this->load->model('pic_model');
		$this->load->library('form_validation');
		
		//$this->load->view('templates/header');

	}
	
	public function form(){
		$this->load->view('pictures/upload_form');
		//$this->load->view('templates/footer');
	}
	
	public function file_data(){
		//validate the form data 

		$this->form_validation->set_rules('art_title', 'Título', 'required');

		$this->form_validation->set_rules('art_intro', 'Intro', 'required');
		$this->form_validation->set_rules('art_desc', 'Descripción', 'required');
		$this->form_validation->set_rules('art_tags', 'Tags', 'required');
		//$this->form_validation->set_rules('art_file', 'File', 'required');
		$this->form_validation->set_rules('art_descfile', 'Pie de imagen', 'required');
		$this->form_validation->set_rules('art_date', 'Fecha', 'required');

        if ($this->form_validation->run() == FALSE) {
			$this->load->view('pictures/upload_form');
		}
		else {
			
			//get the form values
			$data['art_iduser'] = $this->input->post('art_iduser');
			$data['art_title'] = $this->input->post('art_title');

			$data['art_intro'] = $this->input->post('art_intro');
			$data['art_desc'] = $this->input->post('art_desc');
			$data['art_tags'] = $this->input->post('art_tags');
			$data['art_descfile'] = $this->input->post('art_descfile');
			$data['art_date'] = $this->input->post('art_date');

			//file upload code 
			//set file upload settings 
			$config['upload_path']          = APPPATH. '../assets/uploads/';
			$config['allowed_types']        = 'gif|jpg|png';
			$config['max_size']             = 1024;

			$this->load->library('upload', $config);

			if ( ! $this->upload->do_upload('art_file')){
				$error = array('error' => $this->upload->display_errors());
				$this->load->view('pictures/upload_form', $error);
			}
			else {

				//file is uploaded successfully
				//now get the file uploaded data 
				$upload_data = $this->upload->data();

				//get the uploaded file name
				$data['art_file'] = $upload_data['art_name'];

				//store pic data to the db
				$this->pic_model->store_pic_data($data);

				redirect('/welcomepic');
			}
			$this->load->view('templates/footer');
		}
	}
}
