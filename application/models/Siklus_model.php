<?php
	Class siklus_model extends CI_Model {
		public function __construct() {
			$this->load->database();
		}

		var $table = 'siklus'; //nama tabel dari database
        var $column_order = array('total_tebar', 'tanggal_tebar'); //field yang ada di table user
        var $column_search = array('total_tebar', 'tanggal_tebar'); //field yang diizin untuk pencarian 
        var $order = array('id_siklus' => 'DESC'); // default order

        private function _get_datatables_query() {
            $this->db->from($this->table);
            $i = 0;
         
            foreach ($this->column_search as $item) // looping awal
            {
                if($_POST['search']['value']) // jika datatable mengirimkan pencarian dengan metode POST
                {
                     
                    if($i===0) // looping awal
                    {
                        $this->db->group_start(); 
                        $this->db->like($item, $_POST['search']['value']);
                    }
                    else
                    {
                        $this->db->or_like($item, $_POST['search']['value']);
                    }
     
                    if(count($this->column_search) - 1 == $i) 
                        $this->db->group_end(); 
                }
                $i++;
            }
             
            if(isset($_POST['order'])) 
            {
                $this->db->order_by($this->column_order[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
            } 
            else if(isset($this->order))
            {
                $order = $this->order;
                $this->db->order_by(key($order), $order[key($order)]);
            }
        }
     
        function get_datatables() {
            $this->_get_datatables_query();
            if($_POST['length'] != -1)
            $this->db->limit($_POST['length'], $_POST['start']);
            $this->db->join('jenis_ikan', 'jenis_ikan.id_ikan = siklus.id_ikan');
            $query = $this->db->get();
            return $query->result();
        }
     
        function count_filtered() {
            $this->_get_datatables_query();
            $this->db->join('jenis_ikan', 'jenis_ikan.id_ikan = siklus.id_ikan');
            $query = $this->db->get();
            return $query->num_rows();
        }
     
        public function count_all() {
            $this->_get_datatables_query();
            $this->db->join('jenis_ikan', 'jenis_ikan.id_ikan = siklus.id_ikan');
            $query = $this->db->get();
            return $query->num_rows();
        }

		public function get_id() {
			$query = $this->db->get('siklus');
			return $query->result_array();
		}

        public function get_ikan() {
            $query = $this->db->get('jenis_ikan');
            return $query->result_array();
        }

		public function get_by_id($id_siklus) {
			$this->db->select('*');
			$this->db->from('siklus');
			$this->db->where('id_siklus', $id_siklus);
			$query = $this->db->get();

			return $query->row();
		}

		public function add_siklus() {
			$data = array(
				'id_ikan' => $this->input->post('ikan'),
				'total_tebar' => $this->input->post('tot_tebar'),
				'tanggal_tebar' => $this->input->post('tgl_tebar'),
				'umur_awal' => $this->input->post('umur_awal')
			);

			return $this->db->insert('siklus', $data);
		}

		public function add_siklus_perubahan() {
			$data = array(
				'id_siklus' => $this->input->post('id_siklus'),
				'ikan_mati' => $this->input->post('ikan_mati'),
				'total' => $this->input->post('total_ikan')
			);

			return $this->db->insert('siklus_perubahan', $data);
		}

        public function detil_siklus($id_siklus) {
            $query = $this->db->select('*')
                ->from('siklus')
                ->where('id_siklus', $id_siklus)
                ->get();
            return $query->row_array();
        }

        public function delete_siklus($id_siklus) {
            $this->db->where('id_siklus', $id_siklus);
            $this->db->delete('siklus');
            return true;
        }

        public function get_siklus($id_siklus) {
            $this->db->from($this->table);
            $this->db->where('id_siklus', $id_siklus);
            $query = $this->db->get();

            return $query->row();
        }

        public function edit_siklus() {
            $data = array(
                'id_ikan' => $this->input->post('ikan'),
                'total_tebar' => $this->input->post('tot_tebar'),
                'tanggal_tebar' => $this->input->post('tgl_tebar'),
                'umur_awal' => $this->input->post('umur_awal')
            );

            $this->db->where('id_siklus', $this->input->post('id_siklus'));
            $this->db->update('siklus', $data);
            return $this->db->affected_rows();
        }
	}