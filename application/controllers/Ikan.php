<?php
	class Ikan extends CI_Controller {
		public function index() {
			if (!$this->session->userdata('logged_in')) {
				redirect('login');
			}

			$this->load->view('templates/header');
			$this->load->view('ikan/index');
			$this->load->view('templates/footer');
		}

		public function get_data() {
			$list = $this->ikan_model->get_datatables();
	        $data = array();
	        $no = $_POST['start'];
	        foreach ($list as $field) {
	            $no++;
	            $row = array();
	            $row[] = "<div>".$field->nama_ikan."</div>";
	 			$row[] = '<div class="text-center">
	 						<div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
	 							<div class="btn-group" role="group" aria-label="Third group">
	 								<button type="button" class="btn bg-orange btn-block btn-xs waves-effect" onclick="edit_ikan('.$field->id_ikan.')" data-toggle="tooltip" data-placement="right" title="Ubah Ikan"><i class="material-icons" style="font-size: 16px">create</i></button>
                                </div>
	 							<div class="btn-group" role="group" aria-label="Third group">
	 								<button type="button" class="btn bg-red btn-block btn-xs waves-effect" onclick="modal_hapus('.$field->id_ikan.')" data-toggle="tooltip" data-placement="right" title="Hapus Ikan"><i class="material-icons" style="font-size: 16px">delete</i></button>
                                </div>
	 						</div>
	 					  </div>';
	            $data[] = $row;
	        }
	 	
	        $output = array(
	            "draw" => ($_POST['draw']),
	            "recordsTotal" => $this->ikan_model->count_all(),
	            "recordsFiltered" => $this->ikan_model->count_filtered(),
	            "data" => $data,
	        );
	        //output dalam format JSON
	        echo json_encode($output);
		}

		public function create() {
			$ikan = $this->input->post('nama_ikan');
			
			$cek = $this->ikan_model->get_nama_ikan($ikan);
			if ($cek) {
				return false;
			}
			else {
				$result = $this->ikan_model->add_ikan();
				echo json_encode(array("status" => true));
			}
		}

		public function update() {
			$ikan = $this->input->post('nama_ikan');
			
			$cek = $this->ikan_model->get_nama_ikan($ikan);
			if ($cek) {
				return false;
			}
			else {
				$this->ikan_model->edit_ikan();
				echo json_encode(array("status" => true));
			}
		}

		public function ajax_edit($id_ikan) {
			$data = $this->ikan_model->get_by_id($id_ikan);
			echo json_encode($data);
		}

		public function delete($id_ikan) {
			$this->ikan_model->delete_ikan($id_ikan);
			echo json_encode(array("status" => true));
		}

		public function cek() {
			$nama_ikan = $this->input->post('nama_ikan');
			$this->ikan_model->cek_ikan($nama_ikan);
		}

		public function cek_ikan() {
			if ($this->ikan_model->cek_iwak($_POST['ikan'])) {
				echo 'taken';
			}
			else {
				echo 'not_taken';
			}
		}
	}