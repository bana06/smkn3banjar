<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class KontakUs extends CI_Controller {

		public function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('status_id') != 2) {
			redirect(site_url('Admin/Home'));
		}
	}

	public function index()
	{
		$data['tajuk'] = 'User | Contact US';

		$this->lu->page('kontak_us', $data);
	}

}

/* End of file Home.php */
/* Location: ./application/controllers/user/Home.php */