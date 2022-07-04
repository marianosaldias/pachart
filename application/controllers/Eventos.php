<?php 
class Eventos extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
				
                $this->load->model('events_model');
                $this->load->model('inbox_model');
				//$this->load->model('login_model');
				
			    $this->load->helper('url');
        }

		public function index()
		{
				$eventos = $this->events_model->get_events();
				$count = count($eventos);
				
				$data = array(
						'eventos_entries' => $eventos,
						'count' => $count
				);				
				$dataLastMsg = array(
						'inbox_lastentries' => $this->inbox_model->get_inboxLastMsg()
				);	
				
				$this->parser->parse('templates/header', $dataLastMsg);
				$this->parser->parse('eventos/index', $data);
				$this->load->view('templates/footer');
		}	


        public function newsfilter()
        {
                //Recupero el post "filterBy" del form
                $filter = $this->input->post('data');

				$data = array('eventos_entries' => $this->events_model->get_eventBy($filter));		
                
                $this->parser->parse('eventos/vistafiltered', $data);
        }		
       
		public function view($slug = NULL)
		{
				$data['event_item'] = $this->events_model->get_events($slug);
		
				if (empty($data['event_item']))
				{
						show_404();
				}
		
				$data = array(
						'title'			=> $data['event_item']['title'],
						'fecha_inicio'	=> $data['event_item']['fecha_inicio'],
						'fecha_fin'		=> $data['event_item']['fecha_fin'],
						'text'			=> $data['event_item']['text'],
						'actividades'	=> $data['event_item']['actividades'],
						'organizador'	=> $data['event_item']['organizador'],
						'email'			=> $data['event_item']['email'],
						'telefono'		=> $data['event_item']['telefono'],						
						'eventfile'		=> $data['event_item']['eventfile']
				);				
				$dataLastMsg = array(
						'inbox_lastentries' => $this->inbox_model->get_inboxLastMsg()
				);	
				
				$this->parser->parse('templates/header', $dataLastMsg);
				$this->parser->parse('eventos/view', $data);
				$this->load->view('templates/footer');
		}

}