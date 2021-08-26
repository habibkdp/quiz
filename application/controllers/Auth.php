<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

	public function index()
	{
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('login/login');
		} else {
			$Auth = $this->LoginModel->setting_login();

			if ($Auth == FALSE) {
				$this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show text-center" role="alert">
												Username atau Password salah!</div>');
				redirect('auth');
			} else {
				$data = [
					'username'	=> $Auth->username,
					'id_role'	=> $Auth->id_role
				];
				$this->session->set_userdata($data);

				switch ($Auth->id_role) {
					case 1:
						redirect('admin');
						break;
					case 2:
						redirect('/', $data);
						break;
					default:
						break;
				}
			}
		}
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('auth');
	}

	public function registration()
	{
		$this->form_validation->set_rules(
			'fullname',
			'Fullname',
			'required',
			['required' => 'Fullname Wajib Diisi!']
		);
		$this->form_validation->set_rules(
			'username',
			'Username',
			'required',
			['required' => 'Username Wajib Diisi!']
		);
		$this->form_validation->set_rules(
			'password_1',
			'Password',
			'required|matches[password_2]',
			[
				'required'	=> 'Password Wajib Diisi!',
				'matches'	=> 'Password Tidak Cocok!'
			]
		);
		$this->form_validation->set_rules('password_2', 'Password', 'required|matches[password_1]');

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('login/registration');
		} else {
			$data = array(
				'id'		=> '',
				'fullname'	=> $this->input->post('fullname'),
				'username'	=> $this->input->post('username'),
				'password'	=> $this->input->post('password_1'),
				'id_role'	=> 2
			);

			$this->db->insert('user', $data);
			redirect('auth');
		}
	}
}
