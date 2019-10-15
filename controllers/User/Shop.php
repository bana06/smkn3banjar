<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Shop extends CI_Controller {

		public function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('status_id') != 2) {
			redirect(site_url('Admin/Home'));
		}
	}

	public function index()
	{
		$data['tajuk'] = 'User | Shop';
		$data['categories'] = $this->mod_sb->mengambil('produk_category')->result();
		$data['produks'] = $this->mp->mengambil('produk')->result();
		$data['kate'] = $this->mp->mengambil('produk', 'category_id')->row();

		$this->lu->pageWithCategory('shop', $data);
	}

}

/* End of file Home.php */
/* Location: ./application/controllers/user/Home.php */