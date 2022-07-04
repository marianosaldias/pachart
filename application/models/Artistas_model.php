<?php 
class Artistas_model extends CI_Model {

        public function __construct()
        {
			$this->load->database();
        }

		public function get_artists($tag = FALSE)
		{
			if ($tag === FALSE)
			{
				/* MySQL
				$query = "SELECT * FROM users as usr, artist as art WHERE (usr.iduser = art.iduser) ORDER BY usr.apellido ASC";
				*/

				// Query Builder Class
				$this->db->select('*');
				$this->db->from('artist');
				$this->db->join('users', 'users.iduser = artist.iduser');
				$this->db->where('users.status >', 0);
				$this->db->order_by('users.apellido', 'ASC');	

				$db_result = $this->db->get();
				$result_object = $db_result->result_array();

				foreach ($result_object as &$art) {
					
					$tags=explode(",", $art['tagsartist']);
					$art['tagsartist']=array();

					foreach($tags as $value){
						$art['tagsartist'][]=array("tagname"=>$value);
					}
				}

				return $result_object;
			}
			else
			{
				/* MySQL
				$query = "SELECT * FROM users as usr, artist as art WHERE usr.iduser = art.iduser AND art.tagsartist LIKE '%". $tag ."%' ORDER BY usr.apellido ASC";
				*/
				
				// Query Builder Class
				$this->db->select('*');
				$this->db->from('artist');
				$this->db->join('users', 'users.iduser = artist.iduser');
				$this->db->where('users.status >', 0);
				$this->db->like('artist.tagsartist', $tag);
				$this->db->order_by('users.apellido', 'ASC');	

				$db_result = $this->db->get();
				$result_object = $db_result->result_array();

				foreach ($result_object as &$art) {
					
					$tags=explode(",", $art['tagsartist']);
					$art['tagsartist']=array();

					foreach($tags as $value){
						$art['tagsartist'][]=array("tagname"=>$value);
					}
				}

				return $result_object;				
			}
		}


		public function get_allusers()
		{
			/* MySQL
			$query = "SELECT * FROM users ORDER BY apellido ASC";
			*/
			
			// Query Builder Class
			$this->db->select('*');
			$this->db->from('users');
			$this->db->order_by('users.apellido', 'ASC');	

			$db_result = $this->db->get();
			$result_object = $db_result->result_array();

			return $result_object;				
		}		

}


