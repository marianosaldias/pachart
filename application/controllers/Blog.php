<?php 
class Blog extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
				
                $this->load->model('blog_model');
                $this->load->model('inbox_model');
				//$this->load->model('login_model');
				
			    $this->load->helper('url');
        }

		public function index()
		{
				$blog_entries = $this->blog_model->get_news();
				$count = count($blog_entries);
				
				$data = array(
						'blog_entries' => $this->blog_model->get_news(),
						'count' => $count
				);				
				$dataLastMsg = array(
						'inbox_lastentries' => $this->inbox_model->get_inboxLastMsg()
				);	
				
				$this->parser->parse('templates/header', $dataLastMsg);
				$this->parser->parse('blog/index', $data);
				$this->load->view('templates/footer');
		}	


        public function newsfilter()
        {
                //Recupero el post "filterBy" del form
                $filter = $this->input->post('data');

				$data = array('blog_entries' => $this->blog_model->get_newsBy($filter));		
                
                $this->parser->parse('blog/vistafiltered', $data);
        }		

		public function delete_reg_blog()
		{
			$this->load->helper('file');

		    //Recupero el post "trash" que indica el indice del registro a eliminar
		    $idToTrash = $this->input->post('trash');
		    $imageName = $this->input->post('imageName');

		    $deleteReg = $this->blog_model->delete_blognote($idToTrash);

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
       
		public function view($slug = NULL)
		{
				$data['news_item'] = $this->blog_model->get_news($slug);
		
				if (empty($data['news_item']))
				{
						show_404();
				}
		
				$data = array(
						'title'		=> $data['news_item']['title'],
						'fecha'		=> $data['news_item']['fecha'],
						'text'		=> $data['news_item']['text'],
						'apellido'	=> $data['news_item']['apellido'],
						'nombre'	=> $data['news_item']['nombre'],
						'blogfile'	=> $data['news_item']['blogfile'],
						'id'		=> $data['news_item']['id'],
						'iduser'	=> $data['news_item']['iduser']
				);				
				$dataLastMsg = array(
						'inbox_lastentries' => $this->inbox_model->get_inboxLastMsg()
				);	
				
				$this->parser->parse('templates/header', $dataLastMsg);
				$this->parser->parse('blog/view', $data);
				$this->load->view('templates/footer');
		}

		public function nueva_nota()
		{
				$dataLastMsg = array(
						'inbox_lastentries' => $this->inbox_model->get_inboxLastMsg()
				);	
				
				$this->parser->parse('templates/header', $dataLastMsg);
				//$this->parser->parse('blog/view', $data);
				$this->load->view('templates/footer');
		}		

}