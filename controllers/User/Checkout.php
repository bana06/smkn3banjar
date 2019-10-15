<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Checkout extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('status_id') != 2) {
			redirect(site_url('Admin/Home'));
		}
	}

	public function index()
	{
		$data['tajuk'] = 'User | Checkout';

		$this->lu->page('checkout', $data);
	}

}

/* End of file Home.php */
/* Location: ./application/controllers/user/Home.php */