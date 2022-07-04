<?php 
class Perfil_model extends CI_Model {

        public function __construct()
        {
			$this->load->database();
        }

		public function get_artist($iduser)
		{
			/* MySQL
			$query = "SELECT art.*, usr.* FROM artist as art, users as usr WHERE (art.iduser = usr.iduser AND art.iduser = ". $iduser .")";
			*/

			// Query Builder Class
			$this->db->select('*');
			$this->db->from('artist');
			$this->db->join('users', 'artist.iduser = users.iduser');
			$this->db->join('artistbios', 'artist.iduser = artistbios.iduser');
			$this->db->where('artist.iduser =', $iduser);

			$db_result = $this->db->get();
			$result_object = $db_result->result_array();

			foreach ($result_object as &$artist ) {
				
				$tags=explode(",", $artist['tagsartist']);
				$artist['tagsartist']=array();

				foreach($tags as $value){
					$artist['tagsartist'][]=array("tagname"=>$value);
				}
			}

			return $result_object;
	
			//$queryBlog = $this->db->get_where('blogs', array('iduser' => $iduser));
			//return $queryBlog->result_array();
		}

		public function get_blog($iduser)
		{
			/* MySQL
			$query = "SELECT bl.*, usr.* FROM blogs as bl, users as usr WHERE (bl.iduser = usr.iduser AND bl.iduser = ". $iduser .") ORDER BY bl.fecha DESC LIMIT 3";
			*/

			// Query Builder Class
			$this->db->select('*');
			$this->db->from('blogs');
			$this->db->join('users', 'blogs.iduser = users.iduser');
			$this->db->where('blogs.iduser =', $iduser);
			$this->db->order_by('blogs.fecha', 'DESC');
			$this->db->limit(12);			

			$db_result = $this->db->get();
			$result_object = $db_result->result();

			return $result_object;			
		}

		public function get_collection($iduser)
		{
			/* MySQL
			$query = "SELECT col.*, usr.* FROM collections as col, users as usr WHERE (col.iduser = usr.iduser AND col.iduser = ". $iduser .")";
			*/
			
			// Query Builder Class
			$this->db->select('*');
			$this->db->from('collections');
			$this->db->join('users', 'collections.iduser = users.iduser');
			$this->db->where('collections.iduser =', $iduser);
			$this->db->order_by('collections.idart', 'DESC');

			$db_result = $this->db->get();
			$result_object = $db_result->result_array();

			foreach ($result_object as &$art) {
				
				$tags=explode(",", $art['tags']);
				$art['tags']=array();

				foreach($tags as $value){
					$art['tags'][]=array("tagname"=>$value);
				}
			}			

			return $result_object;				

		}

		public function updateProfile($data) 
		{
			$dataProfileArtist = array(
				'headline'		=> $data['prof_headline'],
				'fechanac'		=> $data['prof_fechanac'],
				'telefono'		=> $data['prof_tel'],
				'tagsartist'	=> $data['prof_tagsartist']
			);

			$dataArtistBios = array(
				'bio'			=> $data['prof_bio'],
				'resume'		=> $data['prof_resume']
			);			

			// update Artist
			$this->db->where('iduser', $this->session->userdata('iduser'));
			$this->db->update('artist', $dataProfileArtist);	

			// update Profile Artistbios
			$this->db->where('iduser', $this->session->userdata('iduser'));
			$this->db->update('artistbios', $dataArtistBios);	
		}	

		public function updatePass($data) 
		{
			$newpass = array(
				'password' => $data['pass_new']
			);

			// update password
			$this->db->where('iduser', $this->session->userdata('iduser'));
			$this->db->update('users', $newpass);			

			// actualizo la password de la session
			$this->session->set_userdata('userpass', $data['pass_new']);
		}			

		public function get_newsBy($search)
		{
			$query = $this->db->get_where('blogs', array('tiponews' => $search));
			return $query->result_array();
		}

}

