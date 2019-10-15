<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mitra extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('status_id') != 1) {
			redirect(site_url('User/Home'));
		}
	}

	public function index()
	{
		$data['tajuk'] = 'Admin | Produk';

		$this->la->page('mitra', $data);
	}

}

/* End of file Produk.php */
/* Location: ./application/controllers/Admin/Produk.php */