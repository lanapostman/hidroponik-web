<?php
	Class Monitoring_model extends CI_Model {
		public function __construct() {
			$this->load->database();
		}

		function getData() {
			$this->db->select('*');
			$result = $this->db->get('data');
			return $result;
		}


		function get_last_insert() {
			$query = $this->db->select('*')
							  ->from('data')
							  ->order_by('id', 'desc')
							  ->limit(1)
							  ->get();
			return $query->row_array();
		}
	}