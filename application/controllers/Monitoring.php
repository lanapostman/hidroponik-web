<?php
	class Monitoring extends CI_Controller {
		public function index() {
			if (!$this->session->userdata('logged_in')) {
				redirect('login');
			}
			
			$data = $this->monitoring_model->getData()->result();
			$x['myData'] = $this->monitoring_model->get_last_insert();

			$x['data'] = json_encode($data);
			$this->load->view('templates/header');
			$this->load->view('monitoring/index', $x);
			$this->load->view('templates/footer');
		}
	}