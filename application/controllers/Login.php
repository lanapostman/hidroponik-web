<?php
	Class Login extends CI_Controller {
		public function index() {
			if ($this->session->userdata('logged_in')) {
				redirect('');
			}

			$this->form_validation->set_rules('username', 'username', 'required');
			$this->form_validation->set_rules('password', 'password', 'required');

			if ($this->form_validation->run() === FALSE) {
				$this->load->view('login/index');
			}
			else {
				// Get username
				$username = $this->input->post('username');
				$password = $this->input->post('password');

				// Login user
				$user_id = $this->login_model->login($username, $password);

				if (!empty($user_id)) {
					// Create Session
					$user_data = array(
						'user_id' => $user_id,
						'username' => $username,
						'logged_in' => true
					);

					$this->session->set_userdata($user_data);
					// Set message
					//$this->session->set_flashdata('user_loggedin', 'You are now Logged in');

					redirect('');
				}
				else {
					// Set message
					//$this->session->set_flashdata('login_failed', 'Login is invalid');
					$this->session->set_flashdata('username', 'Username atau password salah!');
					redirect('login');
				}
			}
		}

		public function logout() {
			// Unset user data
			$this->session->unset_userdata('logged_in');
			$this->session->unset_userdata('user_id');
			$this->session->unset_userdata('username');

			// Set message
			//$this->session->set_flashdata('user_loggedout', 'You are now Logged out');

			redirect('login');
		}
	}