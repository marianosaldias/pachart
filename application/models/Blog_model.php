<?php 
class Blog_model extends CI_Model {

        public function __construct()
        {
			$this->load->database();
        }

		public function get_news($slug = FALSE)
		{
			if ($slug === FALSE)
			{
				/* MySQL
				$query = "SELECT bl.*, usr.* FROM blogs as bl, users as usr WHERE bl.iduser = usr.iduser ORDER BY bl.fecha DESC";
				*/				

				// Query Builder Class
				$this->db->select('*');
				$this->db->from('blogs');
				$this->db->join('users', 'blogs.iduser = users.iduser');
				$this->db->where('blogs.statusblog >', 0);
				$this->db->order_by('blogs.fecha', 'DESC');

				$db_result = $this->db->get();
				$result_object = $db_result->result_array();

				foreach ($result_object as &$blog ) {
					
					$tags=explode(",", $blog['tags']);
					$blog['tags']=array();

					foreach($tags as $value){
						$blog['tags'][]=array("tagname"=>$value);
					}
				}

				return $result_object;
			}
	
			/* MySQL
			$query = "SELECT bl.*, usr.* FROM blogs as bl, users as usr WHERE (bl.slug='". $slug ."' AND bl.iduser = usr.iduser)";
			*/			

			// Query Builder Class
			$this->db->select('*');
			$this->db->from('blogs');
			$this->db->join('users', 'blogs.iduser = users.iduser');
			$this->db->where('blogs.statusblog >', 0);
			$this->db->where('blogs.slug =', $slug);

			$db_result = $this->db->get();
			$result_object = $db_result->row_array();

			return $result_object;
		}

		public function get_newsBy($search)
		{
			/* MySQL
			$query = "SELECT bl.*, usr.* FROM blogs as bl, users as usr WHERE (bl.tiponews='". $search ."' AND bl.iduser = usr.iduser)";
			*/

			// Query Builder Class
			$this->db->select('*');
			$this->db->from('blogs');
			$this->db->join('users', 'blogs.iduser = users.iduser');
			$this->db->where('blogs.tiponews =', $search);

			$db_result = $this->db->get();
			$result_object = $db_result->result();

			return $result_object;
		}

		public function delete_blognote($idTrash) {

			$this->db->where('id', $idTrash);
			$this->db->delete('blogs');

			// statusart = 9: deleted by user
			/*
			$newstatus = 9;

			$data = array(
			    'statusart' => $newstatus
			);

			$this->db->where('idart', $idTrash);
			$this->db->update('collection', $data);
			*/

		}		

}

