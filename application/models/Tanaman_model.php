<?php
	Class Tanaman_model extends CI_Model {
		public function __construct() {
			$this->load->database();
		}

		var $table = 'jenis_tanaman'; //nama tabel dari database
        var $column_order = array('nama_tanaman'); //field yang ada di table user
        var $column_search = array('nama_tanaman'); //field yang diizin untuk pencarian 
        var $order = array('id_tanaman' => 'DESC'); // default order

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
            $query = $this->db->get();
            return $query->result();
        }
     
        function count_filtered() {
            $this->_get_datatables_query();
            $query = $this->db->get();
            return $query->num_rows();
        }
     
        public function count_all() {
            $this->_get_datatables_query();
            $query = $this->db->get();
            return $query->num_rows();
        }

        public function add_ikan() {
            $data = array(
                'nama_tanaman' => $this->input->post('nama_ikan')
            );

            return $this->db->insert('jenis_tanaman', $data);
        }

        public function delete_ikan($id_tanaman) {
            $this->db->where('id_tanaman', $id_tanaman);
            $this->db->delete('jenis_tanaman');
            return true;
        }

        public function get_by_id($id_tanaman) {
            $this->db->from($this->table);
            $this->db->where('id_tanaman', $id_tanaman);
            $query = $this->db->get();

            return $query->row();
        }

        public function cek_ikan($nama_tanaman) {
            $this->db->where('nama_tanaman' , $nama_tanaman);
            $query = $this->db->get('jenis_tanaman');

            if($query->num_rows() > 0) {
                echo "taken";
            }
            else {
                echo "not_taken";
            }
        }

        public function cek_iwak($nama_tanaman) {
            $this->db->where('nama_tanaman' , $nama_tanaman);
            $query = $this->db->get('jenis_tanaman');

            if ($query->num_rows() > 0){
                return true;
            }
            else {
                return false;
            }
        }

        public function edit_ikan() {
            $data = array(
                'nama_tanaman' => $this->input->post('nama_ikan')
            );

            $this->db->where('id_tanaman', $this->input->post('id_tanaman'));
            $this->db->update('jenis_tanaman', $data);
            return $this->db->affected_rows();
        }

        public function get_nama_ikan($nama_tanaman) {
            $query = $this->db->select('nama_tanaman')
            ->from('jenis_tanaman')
            ->where('nama_tanaman', $nama_tanaman)
            ->get();
            return $query->row_array();
        }
	}