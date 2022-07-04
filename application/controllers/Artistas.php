<?php 
class Artistas extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
				
                $this->load->model('artistas_model');
                $this->load->model('inbox_model');
				
			    $this->load->helper('url');
        }

		public function index()
		{
				$tag = $this->input->get('tag');
				
				$artist_entries = $this->artistas_model->get_artists($tag);
				$count = count($artist_entries);

				$data = array(
						'artist_entries' => $artist_entries,
						'count' => $count,
						'tag' => $tag
				);				
				$dataLastMsg = array(
						'inbox_lastentries' => $this->inbox_model->get_inboxLastMsg()
				);	
				
				$this->parser->parse('templates/header', $dataLastMsg);
				$this->parser->parse('artistas/index', $data);
				$this->load->view('templates/footer');
		}	


        public function artistfilter()
        {
                //Recupero el post "filterBy" del form
                $tag = $this->input->get('tag');

				$data = array('artist_entries' => $this->artistas_model->get_artistBy($tag));		
				$dataLastMsg = array(
						'inbox_lastentries' => $this->inbox_model->get_inboxLastMsg()
				);	
				
				$this->parser->parse('templates/header', $dataLastMsg);
				$this->parser->parse('artistas/index', $data);
				$this->load->view('templates/footer');
        }		
       
		public function view($slug = NULL)
		{
				$data['news_item'] = $this->artistas_model->get_artists($slug);
		
				if (empty($data['news_item']))
				{
						show_404();
				}
		
				$data = array(
						'blog_title'=> 'Detalle de la Nota',
						'title'		=> $data['news_item']['title'],
						'fecha'		=> $data['news_item']['fecha'],
						'text'		=> $data['news_item']['text'],
						'apellido'	=> $data['news_item']['apellido'],
						'nombre'	=> $data['news_item']['nombre'],
						'userfile'	=> $data['news_item']['userfile'],
						'textfile'	=> $data['news_item']['textfile']
				);				
				$dataLastMsg = array(
						'inbox_lastentries' => $this->inbox_model->get_inboxLastMsg()
				);	
				
				$this->parser->parse('templates/header', $dataLastMsg);
				$this->parser->parse('artistas/view', $data);
				$this->load->view('templates/footer');
		}

}