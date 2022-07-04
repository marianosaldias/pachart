<?php 
class Events_model extends CI_Model {

        public function __construct()
        {
			$this->load->database();
        }

		public function get_events($slug = FALSE)
		{
			if ($slug === FALSE)
			{
				/* MySQL
				$query = "SELECT * FROM events ORDER BY fecha_inicio DESC";
				*/

				// Query Builder Class
				$this->db->select('*');
				$this->db->from('events');
				$this->db->order_by('events.fecha_inicio', 'DESC');

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

			/* MySQL
			$query = "SELECT * FROM events WHERE slug='". $slug ."'";
			*/

			// Query Builder Class
			$this->db->select('*');
			$this->db->from('events');
			$this->db->where('events.slug =', $slug);

			$db_result = $this->db->get();
			$result_object = $db_result->row_array();

			return $result_object;
		}

		public function get_eventBy($search)
		{
			$query = "SELECT * FROM events";
			$db_result = $this->db->query($query);
			$result_object = $db_result->result();

			return $result_object;
		}


}

