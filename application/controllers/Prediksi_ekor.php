<?php
	Class Prediksi_ekor extends CI_Controller {
		public function get_data() {
			$list = $this->prediksi_ekor_model->get_datatables();
	        $data = array();
	        $no = $_POST['start'];
	        foreach ($list as $field) {
	        	
	            $no++;
	            $row = array();
	            $row[] = "<div class='text-center'>".$field->id_siklus."</div>";
	            $row[] = "<div class='text-center'>".$field->tanggal."</div>";
	 			$row[] = "<div class='text-center'>".$field->total_ekor."</div>";
	 			$row[] = "<div class='text-center'>Rp. ".number_format($field->harga_ekor, 0, ".", ".")."</div>";
	 			$row[] = "<div class='text-center'>Rp. ".number_format($field->hasil_panen, 0, ".", ".")."</div>";
	 			$row[] = '<div class="text-center">
	 					  <div class="btn-group" role="group" aria-label="Third group">
	 					  		<button type="button" class="btn bg-blue btn-block btn-xs waves-effect" onclick="cetak_data_ekor('.$field->id_prediksi.')" data-toggle="tooltip" data-placement="right" title="Cetak Laporan Prediksi"><i class="material-icons" style="font-size: 16px">print</i></button>
                                </div>
	 					  <div class="btn-group" role="group" aria-label="Third group">
	 					  		<button type="button" class="btn bg-red btn-block btn-xs waves-effect" onclick="modal_hapus_ekor('.$field->id_prediksi.')" data-toggle="tooltip" data-placement="right" title="Hapus Prediksi"><i class="material-icons" style="font-size: 16px">delete</i></button>
                                </div>
	 					 </div>';
	            $data[] = $row;
	        }
	 	
	        $output = array(
	            "draw" => ($_POST['draw']),
	            "recordsTotal" => $this->prediksi_ekor_model->count_all(),
	            "recordsFiltered" => $this->prediksi_ekor_model->count_filtered(),
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

			$result = $this->prediksi_ekor_model->add_prediksi_panen($id_siklus, $total_kg, $harga_kg, $hasil_panen);
			echo json_encode(array("status" => true));
		}

		public function delete($id_prediksi) {
			$this->prediksi_ekor_model->delete_prediksi($id_prediksi);
			echo json_encode(array("status" => true));
		}
	}