<?php 
class Formajax_model extends CI_Model {

        public function __construct()
        {
		$this->load->database();
		$this->load->helper('url');
        }

        public function read_user()
        {

        }			

        public function addreg($dataready)
        {
		return $this->db->insert('blogs', $dataready);  
	}	
		
        public function delete_user()
        {

	}			
		
        public function edit_user()
        {

	}			
		
}

