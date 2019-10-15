<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

		public function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('status_id') != 1) {
			redirect(site_url('User/Home'));
		}
	}

	public function index()
	{
		// $this->load->view('admin/homepage');
		$data['tajuk'] = 'Admin | Homepage';

		$this->la->page('dashboard', $data);
	}

}

/* End of file Home.php */
/* Location: ./application/controllers/admin/Home.php */