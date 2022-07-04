<?php 
class Login_model extends CI_Model {

        public function __construct()
        {
                $this->load->database();
				$this->load->helper('url');
        }

		public function auth($form_email, $form_pass)
		{
				/* MySQL
				$query = "SELECT * FROM users as usr, artist as art WHERE (usr.email = '". $form_email ."' AND usr.password = '". $form_pass ."' AND usr.iduser = art.iduser)";
				*/

				// Query Builder Class
				$this->db->select('*');
				$this->db->from('users');
				$this->db->join('artist', 'artist.iduser = users.iduser');
				$this->db->where('users.email =', $form_email);
				$this->db->where('users.password', $form_pass);

				$db_result = $this->db->get();
				
				if ($db_result->num_rows() > 0) {

					$row = $db_result->row();
					//var_dump($row);
					
					if (isset($row))
					{
							$form_username = $row->nombre . " ". $row->apellido;
							$form_usernick = $row->nombre;
							$iduser = $row->iduser;
							$avatar = $row->avatar;
							$status = $row->status;
					};

					$datasession = array(
							'iduser'	=> $iduser,
							'nick'		=> $form_usernick,
							'username'	=> $form_username,
							'email'		=> $form_email,
							'avatar'	=> $avatar,
							'userpass'	=> $form_pass,
							'status'	=> $status,
							'logged_in'	=> TRUE
					);

					$this->session->set_userdata($datasession);							
					return true;
				} else {
					return false;
				}
		}

		public function search_mail($form_email)
		{
				/* MySQL
				$query = "SELECT * FROM users as usr, artist as art WHERE (usr.email = '". $form_email ."' AND usr.password = '". $form_pass ."' AND usr.iduser = art.iduser)";
				*/

				// Query Builder Class
				$this->db->select('*');
				$this->db->from('users');
				$this->db->join('artist', 'artist.iduser = users.iduser');
				$this->db->where('users.email =', $form_email);

				$db_result = $this->db->get();
				$result_object = $db_result->result_array();			
				
				if ($db_result->num_rows() > 0) {

					$row = $db_result->row();
					
					if (isset($row))
					{

							$username = $row->nombre . " ". $row->apellido;
							$password = $row->password;

							$dataPassword = array(
									'username'	=> $username,
									'password'	=> $password
							);							

							return $dataPassword;
					}
				} else {
					return false;
				}
		}		
		
        public function islogued()
        {
				$loguedMail = $this->session->userdata('email');
				
				if ($loguedMail == false) {
					$base_url = base_url();
					redirect($base_url . "index.php/index");
					// se puede crear otra view con una leyenda + un loggin form ;)
				}
		}		

}

