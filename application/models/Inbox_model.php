<?php 
class Inbox_model extends CI_Model {

        public function __construct()
        {
			$this->load->database();
        }

		public function get_inbox($slug = FALSE)
		{
			/* Recupera 'iduser' para leer sus mensajes */
			$idusuario = $this->session->userdata('iduser');

			if ($idusuario > 0)
			{
				/* MySQL
				$query = "SELECT msg.*, usr.* FROM messages as msg, users as usr WHERE (msg.iduser = ". $idusuario ." AND msg.iduserfrom = usr.iduser) ORDER BY msg.idmessage DESC";
				*/

				// Query Builder Class
				$this->db->select('*');
				$this->db->from('messages');
				$this->db->join('users', 'messages.iduserfrom = users.iduser');
				$this->db->where('messages.iduser =', $idusuario);
				$this->db->order_by('messages.idmessage', 'DESC');

				$db_result = $this->db->get();
				$result_object = $db_result->result_array();

				return $result_object;
			}
		}

		public function get_inboxLastMsg($slug = FALSE)
		{
			/* Recupera 'iduser' para leer sus mensajes */
			$idusuario = $this->session->userdata('iduser');

			if ($idusuario > 0)
			{
				/* MySQL
				$query = "SELECT msg.*, usr.* FROM messages as msg, users as usr WHERE (msg.iduser = ". $idusuario ." AND msg.iduserfrom = usr.iduser) ORDER BY msg.fechamessage DESC LIMIT 5";
				*/

				// Query Builder Class
				$this->db->select('*');
				$this->db->from('messages');
				$this->db->join('users', 'messages.iduserfrom = users.iduser');
				$this->db->where('messages.iduser =', $idusuario);
				$this->db->order_by('messages.fechamessage', 'DESC');
				$this->db->limit(5);

				$db_result = $this->db->get();
				$result_object = $db_result->result_array();

				return $result_object;
			}
		}		

		public function insertMsg($data) {
			// insert message on Table
			$insert_data['iduser']		 = $data['idsendto'];
			$insert_data['iduserfrom'] 	 = $data['iduser'];
			$insert_data['tipocontent']	 = $data['tipocont'];
			$insert_data['subject']		 = $data['subject'];
			$insert_data['idcontent']	 = $data['idcont'];
			$insert_data['comment']	 	 = $data['comment'];

			date_default_timezone_set("America/Argentina/Buenos_Aires");
			$insert_data['fechamessage'] = date('Y-m-d H:i:sa');

			$query = $this->db->insert('messages', $insert_data);
		}		

		public function deleteMsg($data) {
			// delete message on Table
			$query = $this->db->delete('messages', array('idmessage' => $data));
		}		

}

