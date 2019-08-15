<?php
	Class Login_model extends CI_Model {
		public function __construct() {
			$this->load->database();
		}

		public function login($username, $password) {
			// Validate
			$this->db->where('username', $username);
			$this->db->where('password', $password);

			$result = $this->db->get('user');

			if ($result->num_rows() == 1) {
				return $result->row(0)->id_user;
			}
			else {
				return false;
			}
		}
	}