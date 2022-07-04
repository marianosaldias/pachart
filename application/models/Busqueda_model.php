<?php 
class Busqueda_model extends CI_Model {

        public function __construct()
        {
			$this->load->database();
        }

		public function busqueda_form($table, $tipo, $artista, $tag)
		{

			// Query Builder Class
			$allTheTables = array('collections', 'blogs');
			if(!empty($table) && in_array($table, $allTheTables)) {
				$this->db->from($table);
			}

			$this->db->select('*');

			if (!empty($artista)) {
				$this->db->join('users', "$table.iduser = users.iduser");
				$this->db->where("$table.iduser =", $artista);
			} else {
				$this->db->join('users', "$table.iduser = users.iduser");
				$this->db->where("$table.iduser >", '0');
			};

			if (!empty($tipo)) {
				$this->db->where("$table.tiponews =", $tipo);
			};			

			if (!empty($tag)) {
				$this->db->like("$table.tags", $tag);
			};				

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

}

