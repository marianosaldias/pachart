<?php 
class Perfil extends CI_Controller {

        public function __construct()
        {
                parent::__construct();

           		$this->load->library('form_validation');
				
                $this->load->model('perfil_model');
                $this->load->model('inbox_model');

				$this->load->model('artistas_model');

			    $this->load->helper('url');
        }

		public function index()
		{
				$key = $this->input->get('id');

				$iduserlogged = $this->session->userdata('iduser');

				if ($key == $iduserlogged) {
					$itsmyprofile = true;
				} else {
					$itsmyprofile = false;
				};

				$dataArtist = array(
						'artist_entries' => $this->perfil_model->get_artist($key)
				);	
				$dataLastMsg = array(
						'inbox_lastentries' => $this->inbox_model->get_inboxLastMsg()
				);	

				// Collection
				$art_entries = $this->perfil_model->get_collection($key);
				$count_collection = count($art_entries);

				$dataCollection = array(
						'collection_entries' => $art_entries,
						'count' => $count_collection
				);	

				// Blog
				$blog_entries = $this->perfil_model->get_blog($key);
				$count_blog = count($blog_entries);

				$dataBlog = array(
						'blog_entries' => $blog_entries,
						'count' => $count_blog
				);	

				
				$this->parser->parse('templates/header', $dataLastMsg);
				$this->parser->parse('perfil/perfiluser', $dataArtist);

				if($count_collection > 0 and $itsmyprofile == true) {
					$this->parser->parse('perfil/perfilcoleccion_myprofile', $dataCollection);
				};
				if($count_collection > 0 and $itsmyprofile == false) {
					$this->parser->parse('perfil/perfilcoleccion', $dataCollection);
				};

				if($count_blog > 0 and $itsmyprofile == true) {				
					$this->parser->parse('perfil/perfilblog_myprofile', $dataBlog);
				};
				if($count_blog > 0 and $itsmyprofile == false) {				
					$this->parser->parse('perfil/perfilblog', $dataBlog);
				};				
				
				$this->load->view('templates/footer');					

		}	

		public function misdatos()
		{
                $this->load->model('login_model');
                $this->login_model->islogued();   

				$key = $this->session->userdata('iduser');
				//var_dump($key);die();

				$dataArtist = array(
						'artist_entries' => $this->perfil_model->get_artist($key)
				);	
				$dataLastMsg = array(
						'inbox_lastentries' => $this->inbox_model->get_inboxLastMsg()
				);	
				
				$this->parser->parse('templates/header', $dataLastMsg);
				$this->parser->parse('perfil/profile_form', $dataArtist);
				$this->load->view('templates/footer');
		}	

		public function misdatosupdate()
		{
                $this->load->model('login_model');
                $this->login_model->islogued();   

				$data['prof_headline']		= $this->input->post('prof_headline');
				$data['prof_fechanac']		= $this->input->post('prof_fechanac');
				$data['prof_tel']			= $this->input->post('prof_tel');
				$data['prof_bio']			= $this->input->post('prof_bio');
				$data['prof_resume']		= $this->input->post('prof_resume');

				$tags_artist = implode(',', $this->input->post('prof_tagsartist'));
				$data['prof_tagsartist']	= $tags_artist;

				$this->perfil_model->updateProfile($data);

				$dato['status'] = "ok";
				echo json_encode($dato);
		}			

		public function cambiarpass()
		{
                $this->load->model('login_model');
                $this->login_model->islogued();   

				$key = $this->session->userdata('iduser');
				//var_dump($key);die();

				$dataArtist = array(
						'artist_entries' => $this->perfil_model->get_artist($key)
				);	
				$dataLastMsg = array(
						'inbox_lastentries' => $this->inbox_model->get_inboxLastMsg()
				);	
				
				$this->parser->parse('templates/header', $dataLastMsg);
				$this->parser->parse('perfil/profile_changepass', $dataArtist);
				$this->load->view('templates/footer_form');
		}

		public function chgepassaction()
		{
                $this->load->model('login_model');
                $this->login_model->islogued();   

				$pass_actual		= $this->input->post('pass_actual');
				$data['pass_new']	= $this->input->post('pass_new');

				if($pass_actual == $this->session->userdata('userpass')) {
					
					$this->perfil_model->updatePass($data);

					$dato['status'] = "ok";
				} else {
					$dato['status'] = "ko";
				}
				echo json_encode($dato);
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
				$dataLastMsg = array(
						'inbox_lastentries' => $this->inbox_model->get_inboxLastMsg()
				);	
				
				$this->parser->parse('templates/header', $dataLastMsg);
				$this->parser->parse('perfil/view', $data);
				$this->load->view('templates/footer');
		}

}