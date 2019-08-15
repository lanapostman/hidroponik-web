<?php
	Class Siklus_perubahan extends CI_Controller {
		public function index() {
			if (!$this->session->userdata('logged_in')) {
				redirect('login');
			}

			$data['id_siklus'] = $this->siklus_perubahan_model->get_id();

			$this->load->view('templates/header');
			$this->load->view('siklus/index', $data);
			$this->load->view('templates/footer');
		}

		public function get_data() {
			$list = $this->siklus_perubahan_model->get_datatables();
	        $data = array();
	        $no = $_POST['start'];
	        foreach ($list as $field) {
	        	
	            $no++;
	            $row = array();
	            $row[] = "<div class='text-center'>".$field->id_siklus."</div>";
	            $row[] = "<div class='text-center'>".$field->total_tebar."</div>";
	 			$row[] = "<div class='text-center'>".$field->ikan_mati."</div>";
	 			$row[] = "<div class='text-center'>".$field->total."</div>";
	 			$row[] = "<div class='text-center'>".$field->tgl_perubahan."</div>";
	 			$row[] = '<div class="text-center">
	 					  <div class="btn-group" role="group" aria-label="Third group">
	 					  		<button type="button" class="btn bg-red btn-block btn-xs waves-effect" onclick="modal_hapus_perubahan('.$field->id_sp.')" data-toggle="tooltip" data-placement="right" title="Hapus Siklus Perubahan"><i class="material-icons" style="font-size: 16px">delete</i></button>
                                </div>
	 					 </div>';
	            $data[] = $row;
	        }
	 	
	        $output = array(
	            "draw" => ($_POST['draw']),
	            "recordsTotal" => $this->siklus_perubahan_model->count_all(),
	            "recordsFiltered" => $this->siklus_perubahan_model->count_filtered(),
	            "data" => $data,
	        );
	        //output dalam format JSON
	        echo json_encode($output);
		}

		public function create() {
			$id_siklus = $this->input->post('id_siklus');
			$this->siklus_perubahan_model->update_total_tebar($id_siklus);
			$result = $this->siklus_perubahan_model->add_siklus_perubahan();
			echo json_encode(array("status" => true));
		}

		public function delete($id_sp) {
			$this->siklus_perubahan_model->delete_perubahan($id_sp);
			echo json_encode(array("status" => true));
		}

	}