<?php 
class Busqueda extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
				
                $this->load->model('index_model');
                $this->load->model('inbox_model');
                $this->load->model('busqueda_model');
                $this->load->model('artistas_model');
                				
			    $this->load->helper('url');
        }

		public function index()
		{
				$dataLastMsg = array(
						'inbox_lastentries' => $this->inbox_model->get_inboxLastMsg()
				);	

				$artists = $this->artistas_model->get_artists();

				$dataArtists = array(
						'artist_entries' => $artists
				);		

				$this->parser->parse('templates/header', $dataLastMsg);
				$this->parser->parse('busqueda/index', $dataArtists);
				$this->load->view('templates/footer_form');
		}	

		public function actionbusqueda()
		{
				$table_form		= $this->input->post('tablename');
				$tipo_form 		= $this->input->post('tipo');
				$artista_form	= $this->input->post('artista');
				$tag_form		= $this->input->post('tag');

				//var_dump("hola" . $table_form . " " . $tipo_form . " " . $artista_form); die();

				$result_entries = $this->busqueda_model->busqueda_form($table_form, $tipo_form, $artista_form, $tag_form);
				$count = count($result_entries);

				$dataResult = array(
						'results_entries'	=> $result_entries,
						'results'			=> $count
				);		

				if($count > 0) {
					if ($table_form	== "collections") {
						$this->parser->parse('busqueda/view_busqueda_collection', $dataResult);
					} else {
						$this->parser->parse('busqueda/view_busqueda_blog', $dataResult);
					}
				} else {
					$this->load->view('busqueda/notresults');
				}

		}
       
		public function view($slug = NULL)
		{
				$data['news_item'] = $this->perfil_model->get_news($slug);
		
				if (empty($data['news_item']))
				{
						show_404();
				}
		
				$data = array(
						'blog_title'=> 'Detalle de la Nota',
						'title'		=> $data['news_item']['title'],
						'text'		=> $data['news_item']['text']
				);				
		
				$this->load->view('templates/header');
				$this->parser->parse('perfil/view', $data);
				$this->load->view('templates/footer');
		}

}