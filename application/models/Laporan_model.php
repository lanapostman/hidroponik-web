<?php
	Class Laporan_model extends CI_model {
		public function __construct() {
			$this->load->database();
		}

		public function get_id_siklus($id_prediksi) {
    		$query = $this->db->select('id_siklus')
	            ->from('prediksi')
	            ->where('id_prediksi', $id_prediksi)
	            ->get();
	        return $query->row()->id_siklus;
    	}

    	public function get_hasil_panen($id_siklus){
    		$this->db->select('*');
    		$this->db->from('siklus');
	        $this->db->join('siklus_perubahan', 'siklus_perubahan.id_siklus = siklus.id_siklus');
	        $this->db->join('prediksi', 'prediksi.id_siklus = siklus_perubahan.id_siklus');
			$this->db->where('siklus.id_siklus', $id_siklus);
			$query = $this->db->get();
			return $query->result_array();
    	}

    	public function get_id_siklus_ekor($id_prediksi) {
    		$query = $this->db->select('id_siklus')
	            ->from('prediksi_ekor')
	            ->where('id_prediksi', $id_prediksi)
	            ->get();
	        return $query->row()->id_siklus;
    	}

    	public function get_hasil_panen_ekor($id_siklus){
    		$this->db->select('*');
    		$this->db->from('siklus');
	        $this->db->join('siklus_perubahan', 'siklus_perubahan.id_siklus = siklus.id_siklus');
	        $this->db->join('prediksi_ekor', 'prediksi_ekor.id_siklus = siklus_perubahan.id_siklus');
			$this->db->where('siklus.id_siklus', $id_siklus);
			$query = $this->db->get();
			return $query->result_array();
    	}

    	public function get_ikan_mati($id_siklus) {
    		$this->db->select('ikan_mati');
    		$this->db->from('siklus_perubahan');
			$this->db->where('id_siklus', $id_siklus);
			$query = $this->db->get();
			return $query->result();
    	}

    	public function get_total_tebar($id_siklus) {
    		$this->db->select('total_tebar');
    		$this->db->from('siklus');
			$this->db->where('id_siklus', $id_siklus);
			$query = $this->db->get();
			return $query->row()->total_tebar;
    	}
	}