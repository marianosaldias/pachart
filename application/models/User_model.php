<?php 
class User_model extends CI_Model {

        public function __construct()
        {
			$this->load->database();
			$this->load->helper('url');
        }

        public function read_user()
        {
		}		

		public function add_user($data)
		{
			$insert_data['nombre']		= $data['user_name'];
			$insert_data['apellido'] 	= $data['user_surname'];
			$insert_data['email'] 		= $data['user_mail'];
			$insert_data['status'] 		= 0;

			// Status 0: alta en users
			// En este momento:
			// 1- se crea una contraseña temporal para el nuevo user
			// 2- se da alta a un registro en la table "artist" con el id de iduser		
			// 3- se hace contacto con el user		

			// Insert
			$query = $this->db->insert('users', $insert_data);
		}
		
        public function delete_user()
        {
		}			
		
        public function edit_user()
        {
		}			
		
}

