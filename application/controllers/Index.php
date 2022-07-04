<?php 
class Index extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
				
                $this->load->model('index_model');
                $this->load->model('inbox_model');
                $this->load->model('user_model');

			    $this->load->helper('url');
        }

		public function index()
		{
				$dataBlog = array(
						'blog_entries' => $this->index_model->get_blog()
				);		
				$dataCollection = array(
						'collection_entries' => $this->index_model->get_collection()
				);	
				$dataArtist = array(
						'artists_entries' => $this->index_model->get_artists()
				);	
				$dataEvents = array(
						'events_entries' => $this->index_model->get_events()
				);	
				$dataLastMsg = array(
						'inbox_lastentries' => $this->inbox_model->get_inboxLastMsg()
				);	
				
				$this->parser->parse('templates/header', $dataLastMsg);
				$this->load->view('index/carousel');
				$this->parser->parse('index/indexcoleccion', $dataCollection);
				$this->parser->parse('index/indexartists', $dataArtist);
				$this->parser->parse('index/indexblog', $dataBlog);
				$this->parser->parse('index/indexevents', $dataEvents);
				$this->load->view('templates/footer');
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

		public function forgotmypassword()
		{
				$this->load->view('templates/header');
				$this->load->view('index/index_forgotmypass');
				$this->load->view('templates/footer_form');
		}		

		public function sendmemypass()
		{
                // reCaptcha
                $recaptcha = $_POST["g-recaptcha-response"];
         
                $url = "https://www.google.com/recaptcha/api/siteverify";
                $data = array(
                        'secret' => '6LcWp1EUAAAAANRFBuCEfMa7a6tgRT6y7KhHxbea',
                        'response' => $recaptcha
                );
                $options = array(
                        'http' => array (
                                'header' => "Content-Type: application/x-www-form-urlencoded",
                                'method' => 'POST',
                                'content' => http_build_query($data)
                        )
                );
                $context  = stream_context_create($options);
                $verify = file_get_contents($url, false, $context);
                $captcha_success = json_decode($verify);

                if ($captcha_success->success) {
                    // No eres un robot, envío mail

                    // Look for the user ---------.--------------------------------------
					$mail		= $this->input->post('forgotpass_email');

					$this->load->model('login_model');

					$dataUserPass = $this->login_model->search_mail($mail);		

					if(strlen($dataUserPass['password']) > 0) {
						// Load mail library --------------------------------------------
						$this->load->library('email');

						$config = array();
						$config['protocol'] = 'mail';
						//$config['mailpath'] = '/usr/sbin/sendmail';
						$config['charset'] = 'iso-8859-1';
						$config['wordwrap'] = TRUE;

						$this->email->initialize($config);
						$this->email->set_newline("\r\n");	

						$this->email->from('marianosaldias@gmail.com', 'PACHArt');
						$this->email->to($mail);
						//$this->email->cc('another@another-example.com');
						//$this->email->bcc('them@their-example.com');

						$this->email->subject('Recupero de contraseña - PACHArt');

						$messaje = "Nombre y Apellido: ". $dataUserPass['username'] .
								"\r\nMail: ". $mail .
								"\r\nPassword: ". $dataUserPass['password'];

						$this->email->message($messaje);
				        // Send mail
				        if ($this->email->send()) {
							$dato['status']	= "ok";
							$dato['find']	= 1;
							echo json_encode($dato);				        
				        };
					} else {
						$dato['find']	= 0;
						$dato['status']	= "ko";
						echo json_encode($dato);
					}
                } else {
                        // Eres un robot!
                }
		}						

		public function contacto()
		{
				$dataLastMsg = array(
						'inbox_lastentries' => $this->inbox_model->get_inboxLastMsg()
				);	
				
				$this->parser->parse('templates/header', $dataLastMsg);
				$this->load->view('index/index_contacto');
				$this->load->view('templates/footer_form');
		}	

		public function contactformaction()
		{
                // reCaptcha
                $recaptcha = $_POST["g-recaptcha-response"];
         
                $url = "https://www.google.com/recaptcha/api/siteverify";
                $data = array(
                        'secret' => '6LcWp1EUAAAAANRFBuCEfMa7a6tgRT6y7KhHxbea',
                        'response' => $recaptcha
                );
                $options = array(
                        'http' => array (
                                'header' => "Content-Type: application/x-www-form-urlencoded",
                                'method' => 'POST',
                                'content' => http_build_query($data)
                        )
                );
                $context  = stream_context_create($options);
                $verify = file_get_contents($url, false, $context);
                $captcha_success = json_decode($verify);

                if ($captcha_success->success) {
                    // No eres un robot, envío mail
					$nombre		= $this->input->post('contact_name');
					$tel		= $this->input->post('contact_tel');
					$mail		= $this->input->post('contact_mail');
					$comments	= $this->input->post('contact_comments');

					//Load mail library
					$this->load->library('email');

					$config = array();
					$config['protocol'] = 'mail';
					//$config['mailpath'] = '/usr/sbin/sendmail';
					$config['charset'] = 'iso-8859-1';
					$config['wordwrap'] = TRUE;

					$this->email->initialize($config);
					$this->email->set_newline("\r\n");	

					$this->email->from($mail, $nombre);
					$this->email->to('marianosaldias@gmail.com');
					//$this->email->cc('another@another-example.com');
					//$this->email->bcc('them@their-example.com');

					$this->email->subject('Formulario de Contacto - PACHArt');

					$messaje = "Nombre y Apellido: ". $nombre .
							"\r\nTelefono: ". $tel .
							"\r\nE-mail: ". $mail .
							"\r\nComentario: ". $comments;		

					$this->email->message($messaje);

			        //Send mail
			        if ($this->email->send()) {
						$dato['status'] = "ok";
						echo json_encode($dato);				        
			        } else {
						//$dato['status'] = "ko";
						$dato['status'] = $this->email->print_debugger();
						echo json_encode($dato);	
			        }
                } else {
                        // Eres un robot!
                }
		}	

		public function nuevousuario()
		{
				$this->load->view('templates/header');
				$this->load->view('index/nuevousuario');
				$this->load->view('templates/footer_form');
		}

		public function createaccount()
		{
                // reCaptcha
                $recaptcha = $_POST["g-recaptcha-response"];
         
                $url = "https://www.google.com/recaptcha/api/siteverify";
                $data = array(
                        'secret' => '6LcWp1EUAAAAANRFBuCEfMa7a6tgRT6y7KhHxbea',
                        'response' => $recaptcha
                );
                $options = array(
                        'http' => array (
                                'header' => "Content-Type: application/x-www-form-urlencoded",
                                'method' => 'POST',
                                'content' => http_build_query($data)
                        )
                );
                $context  = stream_context_create($options);
                $verify = file_get_contents($url, false, $context);
                $captcha_success = json_decode($verify);

                if ($captcha_success->success) {
					// Mail  --------------------------------------------------------
					$name			= $this->input->post('usernew_name');
					$surname		= $this->input->post('usernew_surname');
					$mail			= $this->input->post('usernew_mail');
					$phone			= $this->input->post('usernew_phone');
					$comments		= $this->input->post('usernew_comments');

					$name_surname	= $name . " " . $surname;

					//Load mail library
					$this->load->library('email');

					$config = array();
					$config['protocol'] = 'mail';
					//$config['mailpath'] = '/usr/sbin/sendmail';
					$config['charset'] = 'iso-8859-1';
					$config['wordwrap'] = TRUE;

					$this->email->initialize($config);
					$this->email->set_newline("\r\n");	

					$this->email->from($mail, $name_surname);
					$this->email->to('marianosaldias@gmail.com');
					//$this->email->cc('another@another-example.com');
					//$this->email->bcc('them@their-example.com');

					$this->email->subject('Solicitud de Nuevo Usuario - PACHArt');

					$messaje = "Nombre y Apellido: ". $name . " " . $surname .
							"\r\nTelefono: ". $phone .
							"\r\nE-mail: ". $mail .
							"\r\nComentarios: ". $comments;		

					// Send email to PACHArt
					$this->email->message($messaje);
					// Send mail Ok?
					if ($this->email->send()) {
						$dato['status'] = "ok";
					} else {
						//$dato['status'] = "ko";
						$dato['status'] = $this->email->print_debugger();
					};					

					// Para Insert in "users" ----------------------------------------
					$data['user_name']		= $this->input->post('usernew_name');
					$data['user_surname']	= $this->input->post('usernew_surname');
					$data['user_mail']		= $this->input->post('usernew_mail');

					$adduser = $this->user_model->add_user($data);	
					// Insert Ok?	
					if ($adduser == true) {
						$dato['adduser'] = "ok";
					} else {              
				        $dato['adduser'] = "ko";
					};

			        echo json_encode($dato);
                } else {
                	// Eres un robot!
                }
		}
}