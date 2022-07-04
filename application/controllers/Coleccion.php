<?php
//defined('BASEPATH') OR exit('No direct script access allowed');

class Coleccion extends CI_Controller {

    public function __construct()
    {
            parent::__construct();

            $this->load->database();
			
            $this->load->model('coleccion_model');
            $this->load->model('inbox_model');            
			
		    $this->load->helper('url');
    }

	public function index()
	{
		$tag = $this->input->get('tag');

		$art_entries = $this->coleccion_model->get_pics($tag);
		$count = count($art_entries);

		$data = array(
				'art_entries' => $art_entries,
				'count' => $count,
				'tag' => $tag
		);	
		$dataLastMsg = array(
				'inbox_lastentries' => $this->inbox_model->get_inboxLastMsg()
		);	
		
		$this->parser->parse('templates/header', $dataLastMsg);
		$this->parser->parse('coleccion/picture_list', $data);
		$this->load->view('templates/footer');
	}

	public function view()
	{
		$idart = $this->input->get('idart');

		$data['art_item'] = $this->coleccion_model->get_art($idart);

		if (empty($data['art_item']))
		{
				show_404();
		}

		/*
		$data = array(
				'title'		=> $data['art_item']['title'],
				'fecha'		=> $data['art_item']['fecha'],
				'text'		=> $data['art_item']['text'],
				'apellido'	=> $data['art_item']['apellido'],
				'nombre'	=> $data['art_item']['nombre'],
				'userfile'	=> $data['art_item']['userfile'],
				'textfile'	=> $data['art_item']['textfile'],
				'tags'		=> $data['art_item']['tags']
		);
		*/

		$dataLastMsg = array(
				'inbox_lastentries' => $this->inbox_model->get_inboxLastMsg()
		);	
		
		$this->parser->parse('templates/header', $dataLastMsg);
		$this->parser->parse('coleccion/view', $data);
		$this->load->view('templates/footer');
	}	

    public function artfilter()
    {
        //Recupero el post "filterBy" del form
        $tag = $this->input->get('tag');

		$data = array(
				'art_entries' => $this->coleccion_model->get_all_pics($tag),
				'tag' => $tag
		);		
		$dataLastMsg = array(
				'inbox_lastentries' => $this->inbox_model->get_inboxLastMsg()
		);	
		
		$this->parser->parse('templates/header', $dataLastMsg);
		$this->parser->parse('artistas/index', $data);
		$this->load->view('templates/footer');
    }	

    public function delete_reg_col()
    {
    	$this->load->helper('file');

        //Recupero el post "trash" que indica el indice del registro a eliminar
        $idToTrash = $this->input->post('trash');
        $imageName = $this->input->post('imageName');

        $deleteReg = $this->coleccion_model->delete_col($idToTrash);

        if ($deleteReg = TRUE) {
			$dato['status']		= "ok";

			// Borrar archivo
			// ...
			// ....
        } else {
			$dato['status']		= "ko";
        };
        echo json_encode($dato);
    }	    

    // AngularJS ----------------------------------------------------------------

	public function angular_get()
	{
		$this->load->view('templates/angular_get');
	}	

	public function angular_post()
	{
		$this->load->view('templates/angular_post');
	}		

	public function colleccionangular_get()
	{
		$art_entries = $this->coleccion_model->get_pics_angular();

		echo json_encode($art_entries);
	}

	public function colleccionangular_post()
	{
		// Recibo los datos
		$objDatos	= json_decode(file_get_contents("php://input"));
		$name		= $objDatos->name;
		$year		= $objDatos->year;

		// Acá hago algo con esos datos ;)
		$art_entries = $this->coleccion_model->get_pics_angular_form($name, $year);

		echo json_encode($art_entries);
	}
	
}
