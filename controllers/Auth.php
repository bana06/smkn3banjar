<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	private $table = 'users';

	public function index()
	{
		return redirect(site_url('Auth/login'));
	}

	public function login()
	{
		$data['tajuk'] = 'Login';

		$this->form_validation->set_rules('email', 'email', 'trim|required');
		$this->form_validation->set_rules('password', 'password', 'trim|required|min_length[5]');

		if ($this->form_validation->run() == false) {
			$this->load->view('auth/login', $data);
		} else {
			$email = $this->input->post('email');
			$password = $this->input->post('password');

			$user = $this->mod_sb->mengambil($this->table, ['email' => $email])->row();


			$dataUser = [
				'email' => $email,
				'password' => $password,
				'name' => $user->name,
				'no_hp' => $user->no_hp,
				'status_id' => $user->status_id,
			];

			$this->session->set_userdata($dataUser);
			// var_dump($user);die;
			if ($user->status_id == 1) {
				redirect(site_url('Admin/Home'));
			} else {
				redirect(site_url('User/Home'));
			}
		}


	}

	public function register()
	{
		$this->form_validation->set_rules('name', 'name', 'trim|required|min_length[3]');
		$this->form_validation->set_rules('email', 'email', 'trim|required');
		$this->form_validation->set_rules('password', 'password', 'trim|required|min_length[5]');
		
		if ($this->form_validation->run() == FALSE) {
			$this->load->view('auth/register');
		} else {
			$data = [
				'name' => $this->input->post('name'),
				'email' => $this->input->post('email'),
				'no_hp' => $this->input->post('no_hp'),
				'provinsi' => $this->input->post('provinsi'),
				'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
				'status_id' => 2,
				'photo' => NULL,
			];


			$this->mod_sb->menambah($this->table, $data);
			// var_dump($data);die;
			$this->session->set_flashdata('message', '<div class="alert alert-success">Berhasil menambah data!</div>');
			return redirect('Auth/login');
		}

	}

	public function logout()
	{
		$this->session->sess_destroy();
		return redirect(site_url('Auth'));
	}

}

/* End of file Login.php */
/* Location: ./application/controllers/Auth/Login.php */