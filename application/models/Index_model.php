<?php 
class Index_model extends CI_Model {

        public function __construct()
        {
			$this->load->database();
        }

		public function get_blog()
		{
			/* MySQL
			$query = "SELECT bl.*, usr.* FROM blogs as bl, users as usr WHERE bl.iduser = usr.iduser ORDER BY bl.fecha DESC LIMIT 3";
			*/

			// Query Builder Class
			$this->db->select('*');
			$this->db->from('blogs');
			$this->db->join('users', 'blogs.iduser = users.iduser');
			$this->db->order_by('blogs.fecha', 'DESC');
			$this->db->limit(3);			

			$db_result = $this->db->get();
			$result_object = $db_result->result();

			return $result_object;			
	
			//$queryBlog = $this->db->get_where('blogs', array('iduser' => $iduser));
			//return $queryBlog->result_array();
		}

		public function get_collection()
		{

			/* MySQL
			$query = "SELECT col.*, usr.* FROM collections as col, users as usr WHERE col.iduser = usr.iduser ORDER BY col.idart DESC LIMIT 10";
			*/

			// Query Builder Class
			$this->db->select('*');
			$this->db->from('collections');
			$this->db->join('users', 'collections.iduser = users.iduser');
			$this->db->order_by('collections.idart', 'DESC');
			$this->db->limit(10);			

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

		public function get_artists()
		{
			/* MySQL
			$query = "SELECT art.*, usr.* FROM artist as art, users as usr WHERE art.iduser = usr.iduser ORDER BY art.iduser DESC LIMIT 10";
			*/

			// Query Builder Class
			$this->db->select('*');
			$this->db->from('artist');
			$this->db->join('users', 'artist.iduser = users.iduser');
			$this->db->order_by('artist.iduser', 'DESC');
			$this->db->limit(10);			

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

		public function get_events($slug = FALSE)
		{
			if ($slug === FALSE)
			{
				/* MySQL
				$query = "SELECT * FROM events ORDER BY fecha_inicio DESC LIMIT 3";
				*/

				// Query Builder Class
				$this->db->select('*');
				$this->db->from('events');
				$this->db->order_by('fecha_inicio', 'DESC');
				$this->db->limit(3);			

				$db_result = $this->db->get();
				$result_object = $db_result->result_array();

				foreach ($result_object as &$evento) {
					
					$tags=explode(",", $evento['tags']);
					$evento['tags']=array();

					foreach($tags as $value){
						$evento['tags'][]=array("tagname"=>$value);
					}
				}

				return $result_object;
			}
		}

		public function get_newsBy($search)
		{
			$query = $this->db->get_where('blogs', array('tiponews' => $search));
			return $query->result_array();
		}

}

