  <?php
  	Class Prediksi_model extends CI_Model {
  		public function __construct() {
			$this->load->database();
		}

		var $table = 'prediksi'; //nama tabel dari database
        var $column_order = array('id_siklus', 'total_kg', 'harga_kg', 'hasil_panen'); //field yang ada di table user
        var $column_search = array('id_siklus', 'total_kg', 'harga_kg', 'hasil_panen'); //field yang diizin untuk pencarian 
        var $order = array('id_prediksi' => 'DESC'); // default order

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

		public function add_prediksi_panen($id_siklus, $total_kg, $harga_kg, $hasil_panen, $tanggal) {
			$data = array(
				'id_siklus' => $id_siklus,
                'tanggal' => $tanggal,
				'total_kg' => $total_kg,
				'harga_kg' => $harga_kg,
				'hasil_panen' => $hasil_panen
			);

			return $this->db->insert('prediksi', $data);
		}

        public function add_prediksi_panen_ekor($id_siklus, $total_kg, $harga_kg, $hasil_panen, $tanggal) {
            $data = array(
                'id_siklus' => $id_siklus,
                'tanggal' => $tanggal,
                'total_ekor' => $total_kg,
                'harga_ekor' => $harga_kg,
                'hasil_panen' => $hasil_panen
            );

            return $this->db->insert('prediksi_ekor', $data);
        }

        public function delete_prediksi($id_prediksi) {
            $this->db->where('id_prediksi', $id_prediksi);
            $this->db->delete('prediksi');
            return true;
        }

        public function delete_prediksi_ekor($id_prediksi) {
            $this->db->where('id_prediksi', $id_prediksi);
            $this->db->delete('prediksi_ekor');
            return true;
        }
  	}