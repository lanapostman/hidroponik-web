<?php
	Class Prediksi extends CI_Controller {
		public function index() {
			if (!$this->session->userdata('logged_in')) {
				redirect('login');
			}
			$data['id_siklus'] = $this->siklus_model->get_id();

			$this->load->view('templates/header');
			$this->load->view('prediksi/index', $data);
			$this->load->view('templates/footer');
		}

		public function get_data() {
			$list = $this->prediksi_model->get_datatables();
	        $data = array();
	        $no = $_POST['start'];
	        foreach ($list as $field) {
	        	
	            $no++;
	            $row = array();
	            $row[] = "<div class='text-center'>".$field->id_siklus."</div>";
	            $row[] = "<div class='text-center'>".$field->tanggal."</div>";
	 			$row[] = "<div class='text-center'>".$field->total_kg."</div>";
	 			$row[] = "<div class='text-center'>Rp. ".number_format($field->harga_kg, 0, ".", ".")."</div>";
	 			$row[] = "<div class='text-center'>Rp. ".number_format($field->hasil_panen, 0, ".", ".")."</div>";
	 			$row[] = '<div class="text-center">
	 					  <div class="btn-group" role="group" aria-label="Third group">
	 					  		<button type="button" class="btn bg-blue btn-block btn-xs waves-effect" onclick="cetak_data('.$field->id_prediksi.')" data-toggle="tooltip" data-placement="right" title="Cetak Laporan Prediksi"><i class="material-icons" style="font-size: 16px">print</i></button>
                                </div>
	 					  <div class="btn-group" role="group" aria-label="Third group">
	 					  		<button type="button" class="btn bg-red btn-block btn-xs waves-effect" onclick="modal_hapus('.$field->id_prediksi.')" data-toggle="tooltip" data-placement="right" title="Hapus Prediksi"><i class="material-icons" style="font-size: 16px">delete</i></button>
                                </div>
	 					 </div>';
	            $data[] = $row;
	        }
	 	
	        $output = array(
	            "draw" => ($_POST['draw']),
	            "recordsTotal" => $this->prediksi_model->count_all(),
	            "recordsFiltered" => $this->prediksi_model->count_filtered(),
	            "data" => $data,
	        );
	        //output dalam format JSON
	        echo json_encode($output);
		}

		public function create() {
			$id_siklus = $_GET['id_siklus'];
			$total_kg = $_GET['total_kg'];
			$harga_kg = $_GET['harga_kg'];
			$hasil_panen = $_GET['total'];
			$tanggal = $_GET['tanggal'];

			$result = $this->prediksi_model->add_prediksi_panen($id_siklus, $total_kg, $harga_kg, $hasil_panen, $tanggal);
			echo json_encode(array("status" => true));
		}

		public function create_ekor() {
			$id_siklus = $_GET['id_siklus'];
			$total_kg = $_GET['total_kg'];
			$harga_kg = $_GET['harga_kg'];
			$hasil_panen = $_GET['total'];
			$tanggal = $_GET['tanggal'];

			$result = $this->prediksi_model->add_prediksi_panen_ekor($id_siklus, $total_kg, $harga_kg, $hasil_panen, $tanggal);
			echo json_encode(array("status" => true));
		}

		public function delete($id_prediksi) {
			$this->prediksi_model->delete_prediksi($id_prediksi);
			echo json_encode(array("status" => true));
		}

		public function delete_ekor($id_prediksi) {
			$this->prediksi_model->delete_prediksi_ekor($id_prediksi);
			echo json_encode(array("status" => true));
		}
	}