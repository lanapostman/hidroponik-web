<?php
	Class siklus_perubahan_model extends CI_Model {
		public function __construct() {
			$this->load->database();
		}

		var $table = 'siklus_perubahan'; //nama tabel dari database
        var $column_order = array('id_siklus', 'total_tebar', 'ikan_mati', 'total'); //field yang ada di table user
        var $column_search = array('id_siklus', 'total_tebar', 'ikan_mati', 'total'); //field yang diizin untuk pencarian 
        var $order = array('id_sp' => 'DESC'); // default order

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
            $this->db->join('siklus', 'siklus.id_siklus = siklus_perubahan.id_siklus');
            $query = $this->db->get();
            return $query->result();
        }
     
        function count_filtered() {
            $this->_get_datatables_query();
            $this->db->join('siklus', 'siklus.id_siklus = siklus_perubahan.id_siklus');
            $query = $this->db->get();
            return $query->num_rows();
        }
     
        public function count_all() {
            $this->_get_datatables_query();
            $this->db->join('siklus', 'siklus.id_siklus = siklus_perubahan.id_siklus');
            $query = $this->db->get();
            return $query->num_rows();
        }

        public function add_siklus_perubahan() {
            $data = array(
                'id_siklus' => $this->input->post('id_siklus'),
                'ikan_mati' => $this->input->post('ikan_mati'),
                'total' => $this->input->post('total_ikan'),
                'tgl_perubahan' => $this->input->post('tgl_perubahan')
            );

            return $this->db->insert('siklus_perubahan', $data);
        }

        public function update_total_tebar($id_siklus) {
            $data = array(
                'total_tebar' => $this->input->post('total_ikan')
            );

            $this->db->where('id_siklus', $id_siklus);
            $this->db->update('siklus', $data);
            return $this->db->affected_rows();
        }

        public function delete_perubahan($id_sp) {
            $this->db->where('id_sp', $id_sp);
            $this->db->delete('siklus_perubahan');
            return true;
        }
	}