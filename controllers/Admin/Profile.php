<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('status_id') != 1) {
			redirect(site_url('User/Home'));
		}
	}

	public function index()
	{
		$data['tajuk'] = 'Admin | Profile';

		$this->la->page('profile', $data);
	}

}

/* End of file Produk.php */
/* Location: ./application/controllers/Admin/Produk.php */