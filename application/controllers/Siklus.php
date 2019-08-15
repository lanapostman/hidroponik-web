<?php
	Class Siklus extends CI_Controller {
		public function index() {
			if (!$this->session->userdata('logged_in')) {
				redirect('login');
			}

			$data['id_siklus'] = $this->siklus_model->get_id();
			$data['ikan'] = $this->siklus_model->get_ikan();

			$this->load->view('templates/header');
			$this->load->view('siklus/index', $data);
			$this->load->view('templates/footer');
		}

		public function get_data() {
			$list = $this->siklus_model->get_datatables();
	        $data = array();
	        $no = $_POST['start'];
	        foreach ($list as $field) {
	        	$tgl_selesai = date("Y-m-d", strtotime("$field->tanggal_tebar + 91 days"));
	        	
	            $no++;
	            $row = array();
	            $row[] = "<div class='text-center'>".$field->total_tebar."</div>";
	            $row[] = "<div class=''>".$field->nama_ikan."</div>";
	 			$row[] = "<div class=''>".$field->tanggal_tebar."</div>";
	 			$row[] = "<div class=''>".$tgl_selesai."</div>";
	 			$row[] = '<div class="text-center">
	 						<div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
	 						<div class="btn-group" role="group" aria-label="Third group">
	 								<button type="button" class="btn bg-blue btn-block btn-xs waves-effect" onclick="detil_siklus('.$field->id_siklus.')" data-toggle="tooltip" data-placement="right" title="Detil Siklus"><i class="material-icons" style="font-size: 16px">visibility</i></button>
                                </div>
	 							<div class="btn-group" role="group" aria-label="Third group">
	 								<button type="button" class="btn bg-orange btn-block btn-xs waves-effect" onclick="edit_siklus('.$field->id_siklus.')" data-toggle="tooltip" data-placement="right" title="Ubah Siklus"><i class="material-icons" style="font-size: 16px">create</i></button>
                                </div>
	 							<div class="btn-group" role="group" aria-label="Third group">
	 								<button type="button" class="btn bg-red btn-block btn-xs waves-effect" onclick="modal_hapus_siklus('.$field->id_siklus.')" data-toggle="tooltip" data-placement="right" title="Hapus Siklus"><i class="material-icons" style="font-size: 16px">delete</i></button>
                                </div>
	 						</div>
	 					  </div>';
	            $data[] = $row;
	        }
	 	
	        $output = array(
	            "draw" => ($_POST['draw']),
	            "recordsTotal" => $this->siklus_model->count_all(),
	            "recordsFiltered" => $this->siklus_model->count_filtered(),
	            "data" => $data,
	        );
	        //output dalam format JSON
	        echo json_encode($output);
		}

		public function get_tebar($id_siklus) {
			$data = $this->siklus_model->get_by_id($id_siklus);
			echo json_encode($data);
		}

		public function create() {
			$result = $this->siklus_model->add_siklus_perubahan();
			echo json_encode(array("status" => true));
		}

		public function create_siklus() {
			$result = $this->siklus_model->add_siklus();
			echo json_encode(array("status" => true));
		}

		public function delete($id_siklus) {
			$this->siklus_model->delete_siklus($id_siklus);
			echo json_encode(array("status" => true));
		}

		public function detil_siklus($id_siklus) {
			$row = $this->siklus_model->detil_siklus($id_siklus);
			$tebar = $row['tanggal_tebar'];
			$tgl_panen = date("Y-m-d", strtotime("$tebar + 120 days"));
			echo "<tr>
					<th>Id Siklus</th><td><span>".$row['id_siklus']."</span></td>
				  </tr>
				  <tr>
				  	<th>Total Tebar (ekor)</th><td><span>".$row['total_tebar']."</span></td>
				  </tr>
				  <tr>
				  	<th>Tanggal Panen</th><td><span>".$tgl_panen."</span></td>
				  </tr>
				  <tr>
				  	<th>Umur Awal</th><td><span>".$row['umur_awal']."</span></td>
				  </tr>";
		}

		public function ajax_edit($id_siklus) {
			$data = $this->siklus_model->get_siklus($id_siklus);
			echo json_encode($data);
		}

		public function update_siklus() {
			$this->siklus_model->edit_siklus();
			echo json_encode(array("status" => true));
		}
	}