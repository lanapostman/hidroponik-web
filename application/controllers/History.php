<?php
	class History extends CI_Controller {
		public function index() {
			if (!$this->session->userdata('logged_in')) {
				redirect('login');
			}

			$this->load->view('templates/header');
			$this->load->view('history/index');
			$this->load->view('templates/footer');
		}

		public function get_data() {
			$list = $this->history_model->get_datatables();
	        $data = array();
	        $no = $_POST['start'];
	        foreach ($list as $field) {
	            $no++;
	            $row = array();
	            $row[] = $field->timestamp;
	            $row[] = "<div class='text-center'>".$field->suhu."</div>";
	 			$row[] = "<div class='text-center'>".$field->ph."</div>";
	 			$row[] = "<div class='text-center'>".$field->nutrisi."</div>";
	 			$row[] = "<div class='text-center'>".$field->kedalaman."</div>";
	            $data[] = $row;
	        }
	 	
	        $output = array(
	            "draw" => ($_POST['draw']),
	            "recordsTotal" => $this->history_model->count_all(),
	            "recordsFiltered" => $this->history_model->count_filtered(),
	            "data" => $data,
	        );
	        //output dalam format JSON
	        echo json_encode($output);
		}
	}