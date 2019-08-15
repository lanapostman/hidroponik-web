<?php
	Class Laporan extends CI_Controller {
		public function index() {
			if (!$this->session->userdata('logged_in')) {
				redirect('login');
			}
			$this->load->library('mypdf');
			$id_prediksi = 8;
			$id_siklus = $this->laporan_model->get_id_siklus($id_prediksi);
			$data['data'] = $this->laporan_model->get_hasil_panen($id_siklus);
			
			$this->mypdf->generate('Laporan/dompdf', $data, 'laporan-hasil-panen', 'A4', 'landscape');
		}

		public function cetak($id_prediksi) {
			if (!$this->session->userdata('logged_in')) {
				redirect('login');
			}
			$this->load->library('mypdf');
			$id_siklus = $this->laporan_model->get_id_siklus($id_prediksi);
			$data['data'] = $this->laporan_model->get_hasil_panen($id_siklus);
			$data['ikan_mati'] = $this->laporan_model->get_ikan_mati($id_siklus);
			$data['total_tb'] = $this->laporan_model->get_total_tebar($id_siklus);
			
			$sum = 0; // this is store all sum value so first assign 0
			foreach ($data['ikan_mati'] as $row) {
			   $sum += $row->ikan_mati; // sum value with previous value and store it and no need to convert string type to int cause php do it 
			}
			$data['total'] = $data['total_tb'] + $sum;
			
			$this->mypdf->generate('Laporan/dompdf', $data, 'laporan-hasil-panen', 'A4', 'landscape');
		}

		public function cetak_ekor($id_prediksi) {
			if (!$this->session->userdata('logged_in')) {
				redirect('login');
			}
			$this->load->library('mypdf');
			$id_siklus = $this->laporan_model->get_id_siklus_ekor($id_prediksi);
			$data['data'] = $this->laporan_model->get_hasil_panen_ekor($id_siklus);
			$data['ikan_mati'] = $this->laporan_model->get_ikan_mati($id_siklus);
			$data['total_tb'] = $this->laporan_model->get_total_tebar($id_siklus);

			$sum = 0; // this is store all sum value so first assign 0
			foreach ($data['ikan_mati'] as $row) {
			   $sum += $row->ikan_mati; // sum value with previous value and store it and no need to convert string type to int cause php do it 
			}
			$data['total'] = $data['total_tb'] + $sum;
			
			$this->mypdf->generate('Laporan/ikan', $data, 'laporan-hasil-panen', 'A4', 'landscape');
		}
	}