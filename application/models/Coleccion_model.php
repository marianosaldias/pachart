<?php 
class Coleccion_model extends CI_Model {

	public function __construct() 
	{
        $this->load->database();
		$this->load->helper('url');
    }

	public function get_pics($tag = FALSE) {

		if ($tag == '') {
			/* MySQL
			$query = "SELECT col.*, usr.* FROM collections as col, users as usr WHERE col.iduser = usr.iduser ORDER BY col.idart DESC";	
			*/

			// Query Builder Class
			$this->db->select('*');
			$this->db->from('collections');
			$this->db->join('users', 'collections.iduser = users.iduser');
			$this->db->where('collections.statusart >', 0);
			$this->db->order_by('collections.idart', 'DESC');
		}
		else {
			/* MySQL
			$query = "SELECT col.*, usr.* FROM collections as col, users as usr WHERE col.tiponews ='". htmlspecialchars($tag) ."' AND col.iduser = usr.iduser";	
			*/

			// Query Builder Class
			$this->db->select('*');
			$this->db->from('collections');
			$this->db->join('users', 'collections.iduser = users.iduser');
			$this->db->where('collections.tiponews =', $tag);
			$this->db->where('collections.statusart >', 0);
			$this->db->order_by('collections.idart', 'DESC');			
		}

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


	public function get_art($idart)
	{
		/* MySQL
		$query = "SELECT col.*, usr.*, art.* FROM collections as col, users as usr, artist as art WHERE (col.idart='". $idart ."' AND col.iduser = usr.iduser AND usr.iduser = art.iduser)";
		*/

		// Query Builder Class
		$this->db->select('*');
		$this->db->from('collections');
		$this->db->join('users', 'collections.iduser = users.iduser');
		$this->db->join('artist', 'artist.iduser = users.iduser');
		$this->db->join('artistbios', 'collections.iduser = artistbios.iduser');
		$this->db->where('collections.idart =', $idart);
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

	// Save reg in "collection"
	public function store_pic_data($data) {
		$insert_data['iduser']		= $data['art_iduser'];
		$insert_data['tiponews'] 	= $data['art_tipoart'];
		$insert_data['title'] 		= $data['art_title'];
		$insert_data['slug'] 		= url_title($data['art_title'], 'dash', TRUE);

		$insert_data['artdetail'] 	= $data['art_artdetail'];
		$insert_data['text'] 		= $data['art_desc'];

		$insert_data['tags'] 		= $data['art_tags'];

		$insert_data['fileart'] 	= $data['art_file'];
		$insert_data['fechayear'] 	= $data['art_date'];		

		$query = $this->db->insert('collections', $insert_data);
	}

	// Delete reg from "collection"
	public function delete_col($idTrash) {

        $this->db->where('idart', $idTrash);
        $this->db->delete('collections');

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

	// AngularJS ----------------------------------------------------------------

	public function get_pics_angular() 
	{

		// Query Builder Class
		$this->db->select('*');
		$this->db->from('collections');
		$this->db->join('users', 'collections.iduser = users.iduser');
		$this->db->where('collections.statusart >', 0);
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

	public function get_pics_angular_form($nameform, $yearform) 
	{
		// Query Builder Class
		$this->db->select('*');
		$this->db->from('collections');
		$this->db->join('users', 'collections.iduser = users.iduser');
		$this->db->where('collections.statusart >', 0);
		$this->db->where('users.nombre =', $nameform);
		$this->db->where('collections.fechayear =', $yearform);
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

	
}